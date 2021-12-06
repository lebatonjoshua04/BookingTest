@extends('layout.app')

@section('content')

 <form>
  <div class="container my-3 px-5">
      <div class="titleacc">
        {{$title}}
      </div>
      
        <p> To proceed, please fill out the information required </p>
      <div class="personalinfo">
          <div class="row">
              <div class="col-3 ">
                <div class="input-group-sm mb-3">
                    <label>Surname</label>
                    <span class="">
                      
                      <input type="text" class="form-control" id="surname" value="" required>
                    </span>
                    </div>
                  </div>
              
              <div class="col-3">
                <div class="input-group-sm mb-3">
                  <label>First Name</label>
                  <span class="">
                    
                  <input type="text" class="form-control" id="firstname" value="" required>
                  </span>
                </div>
              </div>

              <div class="col-3">
                  <div class="input-group-sm mb-3">
                      <label>Middle Initial</label>
                      <span>
                        
                    <input type="text" class="form-control" id="middle"  value="" required>
                      </span>
                  </div>
                </div><br>
            </div>

            <div class="row">
              <div class="col-3">
                  <div class="input-group-sm mb-3">
                      <label>Birthday</label><br>
                      <span>
                      
                      <input  style="color: #3fb9a4" type="text" class="form-control" id="datepicker" required>
                      </span>
                    </div>
              </div>

              <div class="col-3">
                  <div class="input-group-sm mb-3">
                  <label>Age</label>
                  <span>
                    
                  <input type="number" id="age" name="age" class="form-control active valid" min="18" max="99" maxlength="2" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" aria-invalid="true" required>
                  </span>
                </div>
              </div>
      <div>

      <div class="acch5">
      <h5> Address </h5>
      </div>

      <div class="address">
        <div class="row">
            <div class="col-3">
              <div class="input-group-sm mb-3">
                  <label>Street Name</label>
                  <span class="">
                    
                    <input type="text" class="form-control" id="street" value="" required>
                  </span>
                  </div>
            </div>
            
            <div class="col-3">
              <div class="input-group-sm mb-3">
                <label>City</label>
                <span>
                  
                <input type="text" class="form-control" id="city" value="" required>
                </span>
              </div>
            </div>

            <div class="col-3">
                <div class="input-group-sm mb-3">
                    <label>Postal Code</label>
                    <span>
                    
                  <input type="number" class="form-control" id="postal"  value="" required>
                </div>
            </div>
        </div>  
      <div>

      <div class="acch5">
        <h5> Contacts </h5>
        </div>

      <div class="address">
        <div class="row">
            <div class="col-3">
              <div class="input-group-sm mb-3">
                  <label>Phone Number</label>
                  <span>
                  
                    <input type="tel" class="form-control" id="phone_number" value="" required>
                  </span>
                  </div>
            </div>
            
            <div class="col-3">
              <div class="input-group-sm mb-3">
                <label>Mobile Number</label>
                <span>
              
                <input type="tel" class="form-control" id="mobile_number"  value="" required>
                </span>
              </div>
            </div>

            <div class="col-3">
                <div class="input-group-sm mb-3">
                    <label>Email Address</label>
                    <span>
                   
                  <input type="email" class="form-control" id="emailaddress"  value="" required>
                    </span>
                </div>
            </div>
        </div>  
      <div>
    <div class="acch5">
    <h5> Kindly inform the following in case of an emergency </h5>
    </div>

    <div class="emergency">
      <div class="row">
          <div class="col-3">
            <div class="input-group-sm mb-3">
                <label>Full Name</label>
                <span>
   
                  <input type="text" class="form-control" id="emergency_name" value="" required>
                </span>
                </div>
          </div>
          
          <div class="col-3">
            <div class="input-group-sm mb-3">
              <label>Mobile Number</label>
              <span>
             
              <input type="tel" class="form-control" id="emergency_number"  value="" required>
              </span>
            </div>
          </div>

          <div class="col-3">
              <div class="input-group-sm mb-3">
                  <label>Relationship</label>
                  <span>
                    <i class="fas fa-user" aria-hidden="true"></i> 
                <input type="text" class="form-control" id="emergency_relationship"  value="" required>
                  </span>
              </div>
          </div>
      </div>  
    <div>

      <div class="btnobt">
    <a href="{{ url('/bookdetails') }}" type="submit" style="background-color: #3fb9a4; color:black; border-color: #3fb9a4" class="btn btn-primary w-50 ms-15">Next</a>
    </div>
  </div>
</form>

<div id="confirmation">
    <p id="popout"></p>
  </div>

@endsection

