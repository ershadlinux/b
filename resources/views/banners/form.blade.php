@inject('countri','App\Http\utilities\country)


{{ csrf_field() }}
<div class="row">

    <div class="col-md-5">
        <div class="form-group">
            <label for="street" class="control-label  ">Street</label>
            <div class=" ">
                <input type="text" class="form-control" name="street" id="street" placeholder="Enter street"
                       value="{{old('street')}}" required>
            </div>
        </div>

        <div class="form-group">
            <label for="city" class="control-label  ">City</label>
            <div class=" ">
                <input type="text" class="form-control" name="city" id="city" placeholder="Enter city"
                       value="{{old('city')}}" required>
            </div>
        </div>

        <div class="form-group">
            <label for="zip" class="control-label  ">Zip / Post code</label>
            <div class=" ">
                <input type="text" class="form-control" name="zip" id="zip" placeholder="Enter zip"
                       value="{{old('zip')}}" required>
            </div>
        </div>

        <div class="form-group">
            <label for="country" class="control-label  ">Country</label>
            <div class=" ">
                <select type="text" name="country" id="country" class="form-control placeholder"
                        placeholder="Enter country" value="{{old('country')}}" required>
                    <option value="" selected disabled hidden>Please select</option>
                    @foreach($countri::countries() as $countri=>$value)
                        <option value="{{$value}}">{{$countri}}</option>

                    @endforeach


                </select>
            </div>
        </div>


        <div class="form-group">
            <label for="state" class="control-label  ">State </label>
            <div class="  ">
                <input type="text" class="form-control" name="state" id="state" placeholder="Enter state"
                       value="{{old('state')}}" required>
            </div>
        </div>

    </div>













    <div class="col-md-offset-1 col-md-6">
        <div class="form-group">
            <label for="price" class="control-label  ">Selling Price</label>
            <div class=" ">
                <input type="text" class="form-control" name="price" id="price" placeholder="Enter price"
                       value="{{old('price')}}" required>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="control-label ">Description </label>
            <div class=" ">
                <textarea type="text" class="form-control" name="description" id="description"
                          placeholder="Enter description" rows="12" required> {{old('description')}} </textarea>
            </div>
        </div>

    </div>
        {{--<div class="form-group">--}}
            {{--<label for="photos" class="control-label col-sm-2">Photos:</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="file" class="form-control" name="photos" id="photos">--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}


<div class="col-md-12">
    <hr>


    <div class="form-group">
        {{--<div class="col-sm-offset-2 col-sm-6">--}}
        <div class="  col-sm-6">
            <button type="submit" class="btn btn-primary">Create Banner</button>
        </div>
    </div>

</div>

</div>