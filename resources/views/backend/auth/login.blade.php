<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>


  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 offset-md-3">

  				<div class="mt-5">
  					@include('partials.flash-message')  					
  				</div>

  				@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul class="">
					            @foreach ($errors->all() as $error)
					                <li class="">{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif

  				<form action="{{ route('admin.login.action') }}" method="post">
  					@csrf 

	  				<div class="card  mt-5 p-3 shadow">
	  					
	  					<div class="card-body">
	  						<div class="card-title text-center ">
		  						<h1 class="font-weight-bold text-primary">Admin Login</h1>
		  						<p>Enter credentials</p>
		  					</div>

	  						<div class="mb-3">
							  <label for="email" class="form-label">Email</label>
							  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
							</div>

							<div class="mb-3">
							  <label for="password" class="form-label">Password</label>
							  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
							</div>

							<div class="d-block">
								<button type="submit" class="btn btn-primary mt-2 btn-block">Login</button>
							</div>
						
	  					</div><!--ENd card body-->
	  				</div><!--End Card-->
  				</form>
  				
  			</div>
  		</div>
  	</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script type="">
    	const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

			const alert = (message, type) => {
			  const wrapper = document.createElement('div')
			  wrapper.innerHTML = [
			    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
			    `   <div>${message}</div>`,
			    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
			    '</div>'
			  ].join('')

			  alertPlaceholder.append(wrapper)
			}

			const alertTrigger = document.getElementById('liveAlertBtn')
			if (alertTrigger) {
			  alertTrigger.addEventListener('click', () => {
			    alert('Nice, you triggered this alert message!', 'success')
			  })
			}

    </script>
  </body>
</html>
