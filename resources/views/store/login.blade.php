@extends('store.storeLayout')
@section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>

<style>
label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}</style>
<div class="section">
    <div class="container">
        <div class="row">
        <form method="post" id="loginForm">
            {{csrf_field()}}
            <div class="col-md-6" style="float: none;margin-left:200px;border:1px solid;box-shadow: -1px 17px 16px 4px #000;border-radius: 14px;">
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Connexion d'utilisateur</h3>
                    </div>
                    <div class="form-group">
                        <input class="input" type="email" name="email" id="email" placeholder="Email" value="..@gmail.com">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="pass" id="pass" placeholder="Password" value="12345678">
                    </div>
                        <input type="submit"  name="signin" class="primary-btn order-submit" value="Connexion">
                </form>
               
                @if(session('message'))
                
                
                <tr>
                    <td>
                        <li> {{session('message')}}</li>
                    </td>
                </tr>
                
                
                
                
		         
                @endif   
                
                @if($errors->any())

                                    <ul>
                                        @foreach($errors->all() as $err)
                                        <tr>
                                            <td>
                                                <li>{{$err}}</li>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </ul>
                                    @endif
                    
                </div>
            </div>

        </div>
    </div>
</div>
<script>
	
	$(document).ready(function() {
		$("#loginForm").validate({
			rules: {
				
				email: {
					required: true,
					email: true
				},
				pass: {
					required: true,
					minlength: 5
				}
			},
			messages: {
				
				email: "Please enter a valid email address",
                
                
				pass: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				}
				
				
			}
		});

		
	});
	</script>
@endsection
