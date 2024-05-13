<style>

.popup {
    margin-top: 18px;
    display: flex;
    margin-left: 3%;
    flex-direction: row;
    background-color: none;
    background:none;

}

.half {
    border: none; /* Just for visualization */
}

.first-half th{ 
    display: flex;
    flex-direction: row;
    background: transparent;
    color: blue;
    font-size: 15px;
    line-height: 1.5; 
    padding: 5px 10px; /* Adjust the padding to increase or decrease vertical spacing */
    border-right: 25px;
}



.second-half tr td{
    display: flex;
    flex-direction: row;
    background: none;
    color: blue;
    font-size: 15px;
    line-height: 1.5; 
    padding: 5px 10px; /* Adjust the padding to increase or decrease vertical spacing */
    border-right: 25px;
}

    .floor-content {
        display: inline-block;
        padding: 20px;
        position: relative;
    }



/* Other styles... */

.FCRH,
.RA,
.LRA,
.LBS,
.IAO,
.ITO,
.ITO-DS,
.LSR,
.OOTL,
.RPS,
.LS,
.GSS {
    position: absolute;
    cursor: pointer;
    display: flex;
    gap: 10px;
}

.FCRH {
    top: 35px;
    left: 120px;
}

.RA {
    top: 35px;
    left: 445px;
}

.LRA {
    top: 35px;
    left: 830px;
}

.LBS {
    top: 35px;
    left: 965px;
}

.IAO {
    top: 215px;
    left: 120px;
    justify-content: space-between;
    gap: 5px;
}

.ITO {
    top: 205px;
    left: 180px;
    justify-content: space-between;
    gap: 5px;
}

.ITO-DS {
    top: 205px;
    left: 250px;
    justify-content: space-between;
    gap: 5px;
}

.LSR {
    top: 205px;
    left: 290px;
    justify-content: space-between;
    gap: 5px;
}

.OOTL {
    top: 205px;
    left: 375px;
    justify-content: space-between;
    gap: 5px;
}

.RPS {
    top: 205px;;
    left: 680px;
    justify-content: space-between;
    gap: 5px;
}

.LS {
    top: 205px;
    left: 810px;
    justify-content: space-between;
    gap: 5px;
}

.GSS {
    top: 205px;
    left: 945px;
    justify-content: space-between;
    gap: 5px;
}

#eye-icon,
#edit-icon {
    font-size: small;
    display: inline-block;
    margin-left: 13px;
}

#edit-icon {
    color: green;
    margin-left: 5px;
}

#eye-icon {
    color: gray;
    margin-left: 20px;
}

.edit-icon {
    color: green;
    margin-left: -13px;
}

.eye-icon {
    color: gray;
    padding-right: 25px;
}
#tooltipText {
    z-index: 9999;
    position: fixed;
    transform: translate(-50%, -50%);
    background-color: #f2f2f2;
    color: #fff;
    white-space: nowrap;
    border-radius: 7px;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.5s ease;
    width: 255px;
    height: 400px;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    padding-top: 10px;
}


#tooltipText.active {
    top: 550px;
    left: 1350px;
    visibility: visible;
    opacity: 1;
}

    #tooltip:hover #tooltipText,
    #tooltip.active {
        top:550px;
        left: 1350px;
        visibility: visible;
        opacity: 1;
    }
    #tooltipText.active .eye-icon {
        color: red; /* Change the color to red when #tooltipText has the active class */
    }
.empty {
    color: gray !important;
    font-style: italic;
    font-weight: bold;
}

    .HAHA {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        width: 455px;
        height: 400px;
    }

    .HAHA-close {
        position: absolute;
        top: 5px;
        right: 5px;
        cursor: pointer;
    }
@media (max-width: 768px) {
        .horizontal-scroll-container {
            width: 800px; /* Adjust this value based on your desired width for smaller screens */
        }
    }
</style>
<div class="scroll-container">
    <div id="second-floor" class="floor-content">
        <img src="{{ asset('assets/img/CasSecondFloor.png') }}" alt="SecondFloor" width="1000px" height="300px">

 <div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 1) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="FCRH"><i class="fas fa-eye eye-icon"></i></span>
</div>
    <!-- <span class="RA" onclick="editpopup()"><i class="fas fa-edit edit-icon"></i></span>
    <div id="edit-popup" class="HAHA">
                    <div class="half first-half">
        <div class="popup">

            <div class="half second-half">
                <table>
            @foreach($fire_list->where('id', 2) as $fire_fetch_list)
            <form wire:submit.prevent="update" enctype="multipart/form-data">
                                    <div class="form-group local-forms">
                                        <label>Name</label>
                                        <input class="form-control" type="text" wire:model="firename"/>
                                    </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        @endforeach

                    {{-- <form wire:submit.prevent="updatefire" enctype="multipart/form-data">
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
                                        @error('type') <span>{{ $message}}</span> @enderror
                                        <br>
                                        <label>Name</label>
                                        <input class="form-control" type="text" wire:model="" placeholder="Name" />
                                        @error('fire_fetch_list.firename') <span>{{ $message}}</span> @enderror
                                        <label>Serial Number</label>
                                        <input class="form-control" type="text" wire:model="serial_number">
                                         <label>Installation Date</label>
                                        <input class="form-control" type="date" wire:model="installation_date">
                                         <label>Expiration Date</label>
                                        <input class="form-control" type="date" id="expiry-date" wire:model="expiration_date">
                                        <label>Description</label>
                                        <input class="form-control" type="text" wire:model="description">
                                        <label>Status</label>
                                        <select class="form-control" wire:model="status">
                                            <option value=" ">Select</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                            <option value="Refill">Refill</option>
                                        </select>
                    </form>
                    @endforeach --}}
                </table>
            </div>
        </div>
            </div>
    <span class="popup-close" onclick="closeEditPopup()"><i class="fas fa-times"></i></span>
    </div> -->

<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
        @foreach($fire_list->where('id', 2) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div> 
    </span>
    <span class="RA"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 3) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="LRA"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 4) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="LBS"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 5) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="IAO"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 5) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="ITO"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 5) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="ITO-DS"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 5) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="LSR"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 5) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="OOTL"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 5) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="RPS"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 5) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="LS"><i class="fas fa-eye eye-icon"></i></span>
</div>
<div id="tooltip">
    <span id="tooltipText"> 
        <h1>TEXT GOES HERE</h1>
        <div class="popup">
            <div class="half first-half">
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Firename</th>
                        <th>Serial Number</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Installtion date</th>
                        <th>expiration date</th>
                        <th>Status</th>
                    </tr>
                </table>
            </div>
            <div class="half second-half">
                <table>
                         @foreach($fire_list->where('id', 5) as $fire_fetch_list)
                <tr>
            <td>{{ $fire_fetch_list['type']}}</td>
            <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
            <td>{{ $fire_fetch_list['serial_number']}}</td>
            <td>{{ $fire_fetch_list->firebuilding->building }}</td>
            <td>{{ $fire_fetch_list->firefloor->floor }}</td>
            <td>{{ $fire_fetch_list->fireroom->room }}</td>
            <td>{{ $fire_fetch_list['installation_date']}}</td>
            <td>{{ $fire_fetch_list['expiration_date']}}</td>
            <td>{{ $fire_fetch_list['status']}}</td>
        </tr>
        @endforeach
                </table>
            </div>
        </div>
    </span>
    <span class="GSS"><i class="fas fa-eye eye-icon"></i></span>
</div>

































<script>
    function editpopup() {
        var popup = document.getElementById('edit-popup');
        popup.style.display = 'block';
    }

    function closeEditPopup() {
        var popup = document.getElementById('edit-popup');
        popup.style.display = 'none';
    }
</script>





























          <!-- 
          
          
          <span class="LRA" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-edit edit-icon"></i></span>
          <span class="LBS" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-eye eye-icon"></i></span>
          <span class="LBS" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-edit edit-icon"></i></span>
          <span class="IAO" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-eye eye-icon"id="eye-icon"></i></span>
          <span class="IAO" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-edit edit-icon" id="edit-icon"></i></span>
          <span class="ITO" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-eye eye-icon"id="eye-icon"></i></span>
          <span class="ITO" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-edit edit-icon" id="edit-icon"></i></span>
          <span class="ITO-DS" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-eye eye-icon"id="eye-icon"></i></span>
          <span class="ITO-DS" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-edit edit-icon" id="edit-icon"></i></span>
          <span class="LSR" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-eye eye-icon"id="eye-icon"></i></span>
          <span class="LSR" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-edit edit-icon" id="edit-icon"></i></span>
          <span class="OOTL" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-eye eye-icon"></i></span>
          <span class="OOTL" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-edit edit-icon" ></i></span>
          <span class="RPS" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-eye eye-icon"></i></span>
          <span class="RPS" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-edit edit-icon" ></i></span>
          <span class="LS" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-eye eye-icon"></i></span>
          <span class="LS" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-edit edit-icon" ></i></span>
          <span class="GSS" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-eye eye-icon"></i></span>
          <span class="GSS" onclick="openModal('FACULTY COMPUTING AND RESEATCH CENTER')"><i class="fas fa-edit edit-icon" ></i></span> -->
          <h1>SECOND FLOOR</h1>
    
        </div>

</div>