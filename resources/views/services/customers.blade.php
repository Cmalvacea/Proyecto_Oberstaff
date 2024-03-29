@include('../partials/header')

    <div class="lockScreen" id="lockScreen">

        <div class="lds-dual-ring" id="loadingSpinner"></div>

        <div class="contentLockScreen" id="operationStatusContainer">
            <p>¿Are you sure you want to proceed?</p>
            <div class="formButtons">
                <button class="definitiveAction" type="button">Accept</button>
                <button class="closeLockScreen" type="button">Close</button>
            </div>
        </div>



        <div class="contentLockScreen" id="statusMessageContainer">
            <p id="statusMessage">Error message</p>
            <button class="closeLockScreen" type="button">Close</button>
        </div>


        <div class="contentLockScreen" id="readCustomer">
            <div class="dataRow">
                <p>Name:</p>
                <span id="nameContainer"></span>
            </div>
            <div class="dataRow">
                <p>Email:</p>
                <span id="emailContainer"></span>
            </div>
            <div class="dataRow">
                <p>Region:</p>
                <span id="regionContainer"></span>
            </div>
            <div class="dataRow">
                <p>Commune:</p>
                <span id="communeContainer"></span>
            </div>
            <div class="dataRow">
                <p>Address:</p>
                <span id="addressContainer"></span>
            </div>
            <div class="formButtons">
                    <button class="disableButton" type="disable">Disable</button>
                    <button class="deleteButton" type="delete">Delete</button>
                    <button class="closeLockScreen" type="button">Close</button>
                </div>
        </div>



        <div class="contentLockScreen" type="create" id="createCustomer">
            <form token="{{ csrf_token() }}" service="customers" id="formCreateCustomer">
                @csrf
                <input required type="text" name="dni" id="dni" placeholder="DNI" maxlength=11>
                <input required type="text" name="name" id="name" placeholder="Name">
                <input required type="text" name="lastname" id="lastname" placeholder="Last name">
                <input required type="text" name="email" id="email" placeholder="Email">
                <input required type="password" name="pasword" id="password" placeholder="Password">
                <select required name="id_reg" id="id_reg">
                    <option required value="">Select a region</option>
                    @foreach ($regions as $region)
                        <option value="{{ $region->id_reg }}">{{ $region->description }}</option>
                    @endforeach
                </select>
                <select required name="id_com" id="id_com">
                    <option value="">Select a commune</option>
                </select>
                <textarea name="address" id="address" cols="30" rows="10" placeholder="Address"></textarea>
                <div class="formButtons" id="formButtonsCreate">
                    <button type="submit">Create</button>
                    <button class="closeLockScreen" type="button">Close</button>
                </div>
            </form>  
        
        </div>


    </div>




    <div class="searchContainer">
        <input type="text" id="customerQuery" placeholder="Email or DNI">
        <button id="searchCustomer" action="search">Search <ion-icon name="search-outline"></ion-icon></button>
        <button id="buttonCreateCustomer" action="create">New <ion-icon name="add-outline"></ion-icon></button>
    </div>



@include('../partials/footer')
