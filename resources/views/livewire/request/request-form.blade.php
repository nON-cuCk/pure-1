
<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5">
            @if ($requestId)
                Edit Request
            @else
                Add Request
            @endif
        </h1>
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    @if ($errors->any())
    <span class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </span>
    @endif
    <form wire:submit.prevent="store" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
<!--                         <div class="col-md-4">
                            <div class="form-group local-forms">
                                <label>
                                   Request
                                    <span class="login-danger">*</span>
                                </label>
                                <select class="form-control select" wire:model="type">

                                    <option value="" selected>Select a Types</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">
                                            {{ $type->description }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div> -->
                        <div class="col-md-4">
                            <div class="form-group local-forms">
                                <label>Building</label>
                                <input class="form-control" type="text" wire:model="firename" placeholder />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group local-forms">
                                <label>
                                    Floor
                                    <span class="login-danger">*</span>
                                </label>
                                <input class="form-control" type="text" wire:model="serial_number" placeholder />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group local-forms">
                                <label>
                                    Room
                                    <span class="login-danger">*</span>
                                </label>
                                <select class="form-control select" wire:model="location">

                                    <option value="" selected>Select a Location</option>
                                    @foreach ($locations as $location)
                                        <option value="{{ $location->id }}">
                                            {{ $location->description }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group local-forms">
                                <label>
                                 Request
                                    <span class="login-danger">*</span>
                                </label>
                                <select class="form-control select" wire:model="request">

                                <option value="" selected>Select a Request</option>
                                @foreach ($addrequests as $addrequest)
                                    <option value="{{ $addrequest->id }}">
                                        {{ $addrequest->description }}
                                    </option>
                                @endforeach
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>

           
      
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
