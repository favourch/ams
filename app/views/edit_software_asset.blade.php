@extends('layout')

    @section('title')
        Edit Software Asset | Asset Management System
    @stop

    @section('row_1')
                        <div class="box span12">
        	                    <div class="box-header">
            						<h2><i class="icon-certificate"></i>Edit Software Asset</h2>
            						<div class="box-icon">
            							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
            							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
            							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
            						</div>
            					</div>
            					<div class="box-content">
            						{{ Form::open(array('url'=> 'asset/software/update', 'class' => 'form-horizontal')) }}

            						  <fieldset>

    						  @if($errors->has())
                                  						<ul class="errors">

                                  						<div class="alert alert-error">
                                                                                          @foreach($errors->all() as $message)
                                                                                                                      <li>{{ $message }}</li>
                                                                                                                      @endforeach
                                                                                       </div>




                                                          </ul>
                                                          @endif
    						  @if(Session::has('error'))
                                                                						    <div class="alert alert-error">
                                                                						        {{Session::get('error')}}
                                                                						    </div>
                                                                						  @endif
                                                                						  @if(Session::has('success'))
                                                                						  <div class="alert alert-success control-group">
                                                                                               {{Session::get('success')}}
                                                                						  </div>
                                                                                          @endif
            							<div class="control-group" hidden="">
            							  <label class="control-label" for="asset_id">Asset Id </label>
            							  <div class="controls">
            								<input type="text" class="span6" name="asset_id" id="asset_id" required="" value="{{$asset_details->asset_id}}"/>

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="software_name">Software Name </label>
            							  <div class="controls">
            								<input type="text" class="span6" name="software_name" id="software_name" required="" value="{{$asset_details->name}}"/>

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="serial_number">Serial Number</label>
            							  <div class="controls">
            								<input type="text" class="span6" name="serial_number" id="serial_number" value="{{$asset_details->serial_number}}" required/>

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="licensed_to_name">Licensed to Name </label>
            							  <div class="controls">
            								<input type="text" class="span6" name="licensed_to_name" id="licensed_to_name" value="{{$asset_details->licensed_to_name}}"/>

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="licensed_to_email">Licensed to Email </label>
            							  <div class="controls">
            								<input type="text" class="span6" name="licensed_to_email" id="licensed_to_email" value="{{$asset_details->licensed_to_email}}"/>

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="seats">Seats </label>
            							  <div class="controls">
            								<input type="text" class="span6" name="seats" id="seats" value="{{$asset_details->seats}}" required/>

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="supplier">Supplier </label>
            							  <div class="controls">
            								{{ Form::select('supplier_id', $supplier_options) }}

            							  </div>
            							</div>
            							<div class="control-group">
            							  <label class="control-label" for="order_number">Order Number </label>
            							  <div class="controls">
                                            <input type="text" class="span6" name="order_number" id="order_number" value="{{$asset_details->order_number}}" />
            							  </div>
            							</div>
            							<div class="control-group">
                                            <label class="control-label" for="purchase_date">Purchase Date</label>
                                            <div class="controls">
                                            	<input type="date" class="span6" name="purchase_date" id="purchase_date" value="{{$asset_details->purchased_date}}">

                                            </div>

                                        </div>

                                        <div class="control-group">
                                            							  <label class="control-label" for="purchase_cost">Purchase Cost </label>
                                            							  <div class="controls">
                                            							  <div class="input-append">
                                            								<input type="text" class="span6" name="purchase_cost" id="purchase_cost" value="{{$asset_details->cost_price}}"/>
                                                                            <span class="add-on">.00</span>
                                            							  </div>
                                            							  </div>
                                            							</div>

                                         <div class="control-group">
                                                     							  <label class="control-label" for="purchase_order_number">Purchase Order Number </label>
                                                     							  <div class="controls">
                                                                                     <input type="text" class="span6" name="purchase_order_number" id="purchase_order_number" value="{{$asset_details->purchase_order_number}}"/>
                                                     							  </div>
                                                     							</div>

                                        <div class="control-group">
                                                                                    <label class="control-label" for="expiration_date">Expiration Date</label>
                                                                                    <div class="controls">

                                                                                    	<input type="date" class="date span6" name="expiration_date" id="expiration_date" value="{{$asset_details->expiration_date}}">

                                                                                    </div>

                                                                                </div>


                        <div class="control-group">
                            <label class="control-label" for="notes"> Notes</label>
                                <div class="controls">
                                    <textarea name="notes" id="notes" class="span6" value="{{$asset_details->notes}}"></textarea>
                                </div>

                        </div>

            							<div class="form-actions">
            							  <button type="submit" class="btn btn-primary">Update</button>
            							  <a href="{{URL::to('asset/software/all')}}" type="button" class="btn"><span class="icon icon-arrow-left"></span> Back</a>
            							</div>
            						  </fieldset>
            						{{ Form::close() }}

            					</div>
            			</div>

            @stop

