<script src="{{asset('js/chart.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{asset('js/base.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
</script>
<!--Data table js file -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
<script src="{{asset('js/mask.min.js')}}"></script>
<script src="{{asset('js/dropify.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/date.min.js')}}"></script>
<script src="{{asset('js/tags.min.js')}}"></script>
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/axios.min.js')}}"></script>


<script>
    // Text editor code 
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
     } );
    // Text editor code
    
    $(".status").on("click", function(){
        let st = $(this).html();
        let id = $(this).attr('data-id');
        if(st == 'inactive'){
            st = 'active';
            $(this).html("active");
            $(this).removeClass("btn-danger");
            $(this).addClass('btn-info');
            const url = '/chenged_status';
            axios.post(url,{id:id, status:st})
            .then(function(response){
                console.log(response);
                location.reload();
            })
            .catch(function(error){
                console.log(error);
            }); 

            return; 
         
        }
        if(st == 'active'){
            st = 'inactive';
            $(this).html("inactive");
            $(this).removeClass("btn-info");
            $(this).addClass('btn-danger');
            const url = '/chenged_status';
            axios.post(url,{id:id, status:st})
            .then(function(response){
                console.log(response);
                location.reload();
            })
            .catch(function(error){
                console.log(error);
                
            }); 

            return; 
        }
        
        
    })

    $(".viewEmailInfo").on("click", function () {
        let id = $(this).attr('edit_id');
        console.log(id);
        axios.post("/email_info", { id: id})
            .then(function (res) {
                console.log(res.data);
                $("#userName").html(res.data[0].name);
                $("#phone").html(res.data[0].phone);
                $("#email").html(res.data[0].email);
                $("#msg").html(res.data[0].message);
                $("#subject").html(res.data[0].subject);
                $("#sendTo").html(res.data[0].email);
                console.log(res.data[0]);
            })
            .catch(function (error) {
                console.log(error);
            })
    });


    $("#send").on("click", function(){
        let sendTo = $("#sendTo").html();
        let subject = $("#subject").html();
        let email = $("#text").val();

        axios.post("/send_to_touch_user",{sendTo:sendTo, subject:subject, email:email})
        .then(function(res){
            console.log(res);
        })
        .catch(function(error){
            console.log(error);
        })
        console.log(sendTo,subject,email);
    });

    $(document).ready(function () {
        window.setTimeout(function () {
            $(".pop-up-box").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 3000);

        window.setTimeout(function () {
            $(".page-success-popup-box").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 3000);

        
        window.setTimeout(function () {
            $(".page-error-popup-box").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 3000);

        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
            ],
        });

        $('#example2').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
            ],
        });
        $('.dt-button').addClass('btn btn-sm btn-outline-orange mb-1 mr-1');
        $('.dt-button').removeClass('dt-button');
    });

</script>