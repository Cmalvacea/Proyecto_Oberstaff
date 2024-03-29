$(document).ready(function () {
    let customerId = 0;
    let globalAction = "";


    $('#dni').keyup(function () {
        const allowedCharacters = ["1","2","3","4","5","6","7","8","9","0"]
        let value = $(this).val()
        let lastCharacter = value[value.length - 1]
        if(!allowedCharacters.includes(lastCharacter)) {

            $(this).val(value.slice(0, value.length - 1))
        }
    })

    $('#searchCustomer').click(function () {
        let inputVal = $('#customerQuery').val()
        inputVal = inputVal.trim()

        if(inputVal == "") {
            $('#customerQuery').css('border', '1px solid red')
            return;
        }


        displayLockScreen(true, 'loading')


        $.ajax({
            url: `/crud/customers/get/${inputVal}`,
            type: 'get',
            success: function (data) {


                customerId = data.dni
                showData(data)
            }
        }).fail(function() {
            displayLockScreen(true, 'message', 'Customer not found');
        })
        

    })


    $('#buttonCreateCustomer').click(function () {

        displayLockScreen(true, 'create')
    })



    $('form').submit(function (e) {
        e.preventDefault()
        const token = $(this).attr('token')
        const service = $(this).attr('service')

        var armadoData = armarData(token);

        if(armadoData == 0 || armadoData == {}) {
            displayLockScreen(true, 'message', 'All fields are required')
            return;
        }

        displayLockScreen(true, 'loading')
        


        $.ajax({
            url: `/crud/${service}/create`,
            type: 'post',
            data: armadoData,
            success: function(data) {
                displayLockScreen(true, 'message', "Operation succesfull")
            }
        }).fail(function (obj) {
            displayLockScreen(true, 'message', obj.responseText)
        })


        
    })




    $('#id_reg').change(function () {
        var id_reg = $(this).val()
        $('.communeOption').remove()

        if(id_reg.trim() == "") {
            return;
        }

        $.ajax({
            url: `/utilities/getCommunes/${id_reg}`,
            type: 'GET',
            data: {
                id_reg: id_reg
            },
            success: function (data) {
                data.forEach(commune => {
                    $('#id_com').append(`<option class="communeOption" value="${commune.id_com}">${commune.description}</option`)
                });
            }
        })
    })


    /// Despliegue de pantallas de acciones


    $('.closeLockScreen').click(function () {
        displayLockScreen(false)
    })

    /// Acciones de borrado


    $('.disableButton').click(function () {


        globalAction = "disable"
        displayLockScreen(true, 'deleteDisable')


    })


    $('.deleteButton').click(function () {

        globalAction = "delete"
        displayLockScreen(true, 'deleteDisable')

    })


    $('.definitiveAction').click(function () {

        displayLockScreen(true, 'loading')

        $.ajax({
            url: `/crud/customers/${globalAction}`,
            type: 'DELETE',
            data: {
                id: customerId,
                _token: $('#formCreateCustomer').attr('token')
            },
            success: function (data) {
                try {
                    displayLockScreen(true, 'message', "Operation succesfull");
                } catch (error) {
                    displayLockScreen(true, 'message');
                }
            },
        })
    })

})


function showData(data) {

    displayLockScreen(true, 'read')

    $('#nameContainer').text(`${data.name} ${data.last_name}`)
    $('#emailContainer').text(`${data.email}`)
    $('#regionContainer').text(data.region)
    $('#communeContainer').text(data.commune)
    $('#addressContainer').text(data.address)
    if(!data.address || data.address == "") {
        $('#addressContainer').text("---")

    }
}

function armarData(token) {

    var data = {
        dni: $('#dni').val(),
        name: $('#name').val(),
        lastname: $('#lastname').val(),
        email: $('#email').val(),
        password: $('#password').val(),
        id_reg: $('#id_reg').val(),
        id_com: $('#id_com').val(),
        address: $('#address').val(),
        _token: token
    }

    return data
}


function displayLockScreen(lockScreen = true, screen = 'create', message = "There was an error during the operation, please try again later") {


    $('#loadingSpinner').css('display', 'none')
    $('#readCustomer').css('display', 'none')
    $('#createCustomer').css('display', 'none')
    $('#statusMessageContainer').css('display', 'none')
    $('#operationStatusContainer').css('display', 'none')

    if(lockScreen == false) {
        $('#lockScreen').css('display', 'none')
        return
    }

    $('#lockScreen').css('display', 'flex')

    switch (screen) {
        case 'create':
            $('#createCustomer').css('display', 'grid')
            break;

        case 'read':
            $('#readCustomer').css('display', 'grid')
            break;


        case 'loading':
            $('#loadingSpinner').css('display', 'grid')
            break;

        case 'message':
            $('#statusMessage').text(message)
            $('#statusMessageContainer').css('display', 'flex')
            break;

        case 'deleteDisable':
            $('#operationStatusContainer').css('display', 'flex');
            break;
    
        default:
            $('#createCustomer').css('display', 'grid')
            break;
    }

}

