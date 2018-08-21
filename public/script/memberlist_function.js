$(function(){
   $("[rel='tooltip']").tooltip();
    var idno = $('input[name="idno"]').val();
    var rowId='';
    var flag='remove';

        $('#memberslist').DataTable({            
           lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ajax: '/admin/postsdata',
            stateSave: true,
            columns : [
              { data: 'id', name: 'id' },
              { data: 'name', name: 'name' },
              { data: 'designation', name: 'designation' },
              { data: 'coffice', name: 'coffice' },
              { data: 'telno', name: 'telno' },
              { data: 'employmentstatus', name: 'employmentstatus' },
              { data: 'status', name: 'status' },
              { data: 'action', name: 'action', orderable : false, searchable: false},
            ],
          });

        $("#forma").on("submit",function(e){
           var url="/admin/createmember";
            if(rowId != "" && flag != "1"){
              url="/admin/editmember/"+rowId;
            }
            else if(rowId != "" && flag == "1"){
              url="/admin/removemember/"+rowId;
            }            
            $.ajaxSetup({
              header:$('meta[name="_token"').attr('contnen')
            })
            e.preventDefault(e);
            $.ajax({
              type:"POST",
              url: url,
              data: $(this).serialize(),
              dataType:'json',
              success: function(data){
                $('#memberslist').DataTable().ajax.reload();
                var $toastContent = data.message;
                Materialize.toast($toastContent, 5000);
                $('#modal1').modal("close");
              },
              error: function(data){
                alert("Assaasdsad");
              }
            });
       });
//
        $('#memberslist').DataTable().on('click','tr .edit',function(e){
             e.preventDefault();
             rowId='';
             rowId = $(this).closest('tr').find('td:eq(0)').text();
             var url="/admin/getmemberinfo/"+rowId;
             $.ajaxSetup({
              header:$('meta[name="_token"').attr('contnen')
              })
              e.preventDefault(e);
              $.ajax({
                type:"GET",
                url: url,
                data: $(this).serialize(),
                dataType:'json',
                success: function(data){
                  $("#idno").val(rowId);
                  $("#lname").val(data.lname);
                  $("#fname").val(data.fname);
                  $("#mname").val(data.mname);
                  $("#signaturekey").val(data.signaturekey);
                  $("#suffixname").val(data.suffixname);
                  $("#email").val(data.email);
                  $("#designation").val(data.designation);
                  $("#agencyidno").val(data.agencyidno);
                  $("#bdate").val(data.bdate);
                  $("#celno").val(data.celno);
                  $("#telno").val(data.telno);
                  $("#tin").val(data.tin);
                  $("#csalaryamount").val(data.csalaryamount);
                  $("#cleavecredits").val(data.cleavecredits);
                  $("#coffice").val(data.coffice);
                  $("#cposition").val(data.cposition);
                  $("#currentaddress").val(data.currentaddress);
                  $("#datejoined").val(data.datejoined);
                  $("#employmentstatus").val(data.employmentstatus);
                  $("#gsisno").val(data.gsisno);
                  $("#homeaddress").val(data.homeaddress);
                  $("#officeaddress").val(data.officeaddress);
                  $("#passbookno").val(data.passbookno);
                  $("#sex").val(data.sex);
                  $("#sharecapital").val(data.sharecapital);
                  $("#totalregularloan").val(data.totalregularloan);
                  $("#totalpettycashloan").val(data.totalpettycashloan);
                  $("#totalemergencyloan").val(data.totalemergencyloan);
                  $("#totalcommodityloan").val(data.totalcommodityloan);
                  $("#totalotherstloan").val(data.totalotherstloan);
                },
                error: function(data){

                }
              });
        });

        $('#allposts').DataTable().on('click','tr .remove',function(e){
             e.preventDefault();
             rowId='';
             flag='1';
             $('#modal1').modal("show");
             $('.modal-title').text("Removing / Deleting Data");
             rowId = $(this).closest('tr').find('td:eq(0)').text();
             $('#name').val($(this).closest('tr').find('td:eq(1)').text());
             $('#venue').val($(this).closest('tr').find('td:eq(2)').text());
             $('#datestarted').val($(this).closest('tr').find('td:eq(3)').text());
             $('#timestarted').val($(this).closest('tr').find('td:eq(4)').text());
             $('#dateend').val($(this).closest('tr').find('td:eq(5)').text());
             $('#timeend').val($(this).closest('tr').find('td:eq(6)').text());
             $('#conductedby').val($(this).closest('tr').find('td:eq(7)').text());
             $("#forma input").prop("readonly", true);
        });
//
//-----------------------------------------------------------------------------------------
       
//---------------------------------------------------------------------------------------------------------

  /*$( "#createcto" ).dialog({
    close: function( event, ui ) {}
  });*/
/*  $( ".close").on( "click", function() {
    rowId='';
  } );
  $( ".closed").on( "click", function() {
    rowId='';
  } );*/
  $('.modal-fixed-footer').on('hide.bs.modal', function (e) {
    rowId='';
    /*$('.modal-clear:not(.active)').find('input[type=text][name!=userid]').val('');
    $('.modal-clear:not(.active)').find('input[type=date]').val('');
    $('.modal-clear:not(.active)').find('input[type=file]').val('');
    $('.modal-clear:not(.active)').find('input[type=month]').val('');
    $('.modal-title').text("Add New Data");
    $(".form-horizontal :input").prop("readonly", false);*/
    flag='';
  });

/*  $("#compose-textarea").wysihtml5();*/

//---------------------------------------------------------------------------------------------------------

    
  /*$('#incoming').DataTable({
    "createdRow": function( row, data, dataIndex ) {
                       if ( data['recstat'] == "1" ) {        
                          $(row).addClass('hidden');
                       }
              },
    retrieve: true,
    processing: true,
    serverSide: true,
    ajax: '/tuts/'+idno,
    columns : [
      { data: 'refno', name: 'refno' },        
      { data: 'sender', name: 'sender' },
      { data: 'subject', name: 'subject' },
      { data: 'datetime', name: 'datetime' },                
      { data: 'action', name: 'action', orderable : false, searchable: false},
    ]
  });*/
 
  


});