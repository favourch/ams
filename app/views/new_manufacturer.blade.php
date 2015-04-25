@extends('layout')

    @section('title')
        Create New Manufacturer
    @stop

    @section('row_1')
                    <div class="box span12">
    	                    <div class="box-header">
        						<h2><i class="icon-briefcase"></i>Create New Manufacturer</h2>
        						<div class="box-icon">
        							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
        							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
        							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
        						</div>
        					</div>
        					<div class="box-content">
        						{{ Form::open(array('url'=> 'manufacturer/create', 'class' => 'form-horizontal')) }}

        						  <fieldset>
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
        							<div class="control-group">
        							  <label class="control-label" for="manufacturer_name">Manufacturer Name </label>
        							  <div class="controls">
        								<input type="text" class="span6" name="manufacturer_name" id="manufacturer_name" required/>

        							  </div>
        							</div>
        							<div class="control-group">
        							  <label class="control-label" for="address"> Address </label>
        							  <div class="controls">
        								<input type="text" class="span6" name="address" id="address" required/>

        							  </div>
        							</div>

        							<div class="control-group">
        							  <label class="control-label" for="email_address">Email Address </label>
        							  <div class="controls">
        								<input type="text" class="span6" name="email_address" id="email_address" required/>

        							  </div>
        							</div>
        							<div class="control-group">
        							  <label class="control-label" for="phone_number">Phone Number </label>
        							  <div class="controls">
        								<input type="text" class="span6" name="phone_number" id="phone_number" />

        							  </div>
        							</div>


        							<div class="form-actions">
        							  <button type="submit" class="btn btn-primary">Submit</button>
        							  <button type="reset" class="btn">Cancel</button>
        							</div>
        						  </fieldset>
        						{{ Form::close() }}

        					</div>
        			</div>

        @stop