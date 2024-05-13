<body>
    <div class="gallon">
        <div>
            <h1><strong>FireList Database</strong></h1>
            <button id="openModalButton">Add new FireList</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="customModal">
        <h2>Add New FireList</h2>
        <form wire:submit.prevent="createFire">
        <label>Type</label>
                        <select class="form-control select" wire:model="type">
                                            <option value="" selected>Select a Types</option>
                                            <option value="water" selected>Water</option>
                                            <option value="foam" selected>Foam</option>
                                            <option value="CO2" selected>Carbon Dioxide CO2</option>
                                            <option value="dry chemical powder" selected>Dry Powder</option>
                                            <option value="wet chemical" selected>Wet Chemical</option>
                                            <option value="powder" selected>Powder</option>
                         </select>
                                <br>
                                <label for="firename">firename</label>
            <input type="text" id="firename" wire:model="firename">
                                @error('firename')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                                <br>
                                <label for="serial_number">serial_number</label>
            <input type="text" id="serial_number" wire:model="serial_number">
                                @error('serial_number')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                                <br>
                                <label>Building</label>
                                <select wire:model="building">
                                @foreach ($locations as $location)
                                <option value="{{ $location->id}}">{{$location->building}}</option>
                                @endforeach
                                </select>
                                <br>
                                <label>Floor</label>
                                <select wire:model="floor">
                                @foreach ($locations as $location)
                                <option value="{{ $location->id}}">{{$location->floor}}</option>
                                @endforeach
                                </select>
                                <br>
                                <label>Room</label>
                                <select wire:model="room">
                                @foreach ($locations as $location)
                                <option value="{{ $location->id}}">{{$location->room}}</option>
                                @endforeach
                                </select>
                                <br>
                                <label>installation_date</label>
            <input type="date" id="installation_date" wire:model="installation_date">
                                @error('installation_date')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                                <br>
                                <label">expiration_date</label>
            <input type="date" id="expiration_date" wire:model="expiration_date">
                                @error('expiration_date')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                                <br>
                                <label for="description">description</label>
            <input type="text" id="description" wire:model="description">
                                @error('description')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                                <br>
                                <label>Status</label>
                                        <select class="form-control" wire:model="status">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                            <option value="Refill">Refill</option>
                                        </select>
                                        <button>save</button>
        </form>
        <button id="closeModalButton">cancel</button>
        

    </div>


    <div class="backdrop" id="backdrop"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var openModalButton = document.getElementById("openModalButton");
            var customModal = document.getElementById("customModal");
            var closeModalButton = document.getElementById("closeModalButton");
            var backdrop = document.getElementById("backdrop");

            // Function to show modal
            function showModal() {
                customModal.style.display = "block";
                backdrop.style.display = "block";
            }

            // Function to hide modal
            function hideModal() {
                customModal.style.display = "none";
                backdrop.style.display = "none";
            }

            // Event listener to open modal when button is clicked
            openModalButton.addEventListener("click", showModal);

            // Event listener to close modal when close button is clicked
            closeModalButton.addEventListener("click", hideModal);

            // Event listener to close modal when backdrop is clicked
            backdrop.addEventListener("click", hideModal);
        });
    </script>

</body>
<style>
    .gallon {
        width: 80%;
        background-color: black;
        margin-left: 10%;
        height: 650px;
    }

    button {
        float: right;
    }

    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: green;
        border: 1px solid #ccc;
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        max-width: 350px;
        max-height: 400px;
        overflow: auto;
  
    }
    .modal h2{
        font-size: 18px;
    }
    /* Backdrop styles */
    .backdrop {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }
</style>