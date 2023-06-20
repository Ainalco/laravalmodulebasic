$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function addcustomer(){
    var customer_name = $("#name").val();
    var customer_email = $("#email").val();
    var customer_phone = $("#mobile").val();
    var password = $("#password").val();
    var customer_address = $("#address").val();
    var token=$("#token").val();
    var datastring="customer_name="+customer_name+"&customer_email="+customer_email+"&customer_phone="+customer_phone+"&password="+password+"&customer_address="+customer_address+"&_token="+token+"&cuntomer_no=";
	 $.ajax({
                method: 'post',
                url: "/customers/store",
                data: datastring,
                dataType: 'POST',
                success: function(data){
                    console.log(data);
                    if(data.done==1){
					$("#client-info").modal(hide);
                    }
                }
            });

}