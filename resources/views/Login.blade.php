@extends('layout.master')




@section('Content')
    
<h4> Welll Its Working Fine Login Page</h4>

<form method="POST" class='LoginForm'>
    <input type="text" name="CustUserI" >
    <input type="password" name="CustPassI" >
    <button type="button" class="CustLoginPost">Login</button>
</form>



@section('Script')
    

<script>

    $(document).on('click','.CustLoginPost',function(){
        
        //Get + Validate Inputs 
        var CustUser = $('input[name=CustUserI]').val();
        var CustPass = $('input[name=CustPassI]').val();



        //Send Data
        $.ajax({
            method:"POST",
            url:"{{ route('CustLogin') }}",
            data:{
                CustUserI:CustUser,
                CustPassI:CustPass
            },success:function(data){

                console.log(data)
       
            }
        })

        


    })


</script>

@endsection

@endsection