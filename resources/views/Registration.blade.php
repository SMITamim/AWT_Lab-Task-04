<form action="/doregistration" method="POST">
    {{csrf_field()}}
    <div class="container">
      <h1>Register</h1>

      <hr>
    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="Email" id="Email" > <br> <br>

        @if($errors->has ('Email'))
            <b>{{$errors->first('Email')}}</b> <br><br>
        @endif
    </div>

      <div>
      <label for="policeId"><b>Police Id</b></label>
      <input type="text" placeholder="Enter Police Id" name="policeId" id="policeId" > <br> <br>

        @if($errors->has ('policeId'))
            <b>{{$errors->first('policeId')}}</b> <br><br>
        @endif
      </div>

      <div>
      <label for="licensenum"><b>License Number</b></label>
      <input type="text" placeholder="Enter License Number" name="licensenum" id="licensenum" > <br> <br>

        @if($errors->has ('licensenum'))
            <b>{{$errors->first('licensenum')}}</b> <br><br>
        @endif
      </div>

      <div>
      <label for="station"><b>Station</b></label>
      <input type="text" placeholder="Enter station" name="station" id="station"> <br> <br>

       @if($errors->has ('station'))
            <b>{{$errors->first('station')}}</b> <br><br>
        @endif
      </div>

      <div>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Email" id="Password"> <br> <br>

      @if($errors->has ('Password'))
         <b>{{$errors->first('Password')}}</b> <br> <br>
     @endif

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat"> <br> <br>
      </div>

      <hr>


      <button type="submit" class="registerbtn">Register</button>
    </div>






  </form>
