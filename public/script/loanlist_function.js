$(function(){
   $("[rel='tooltip']").tooltip();
    var idno = $('input[name="idno"]').val();
    var rowId='';
    var flag='remove';
    $('.inputUSD').NumBox({ symbol: '', max:'2000000'});

    $('#loanlist').DataTable({            
               lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                ajax: '/admin/loanlistpostsdata',
                stateSave: true,
                columns : [
                  { data: 'refno', name: 'refno' },
                  { data: 'loantype', name: 'name' },
                  { data: 'name', name: 'name' },
                  { data: 'loanamount', name: 'loanamount' },
                  { data: 'overallaction', name: 'overallaction' },
                  { data: 'action', name: 'action', orderable : false, searchable: false},
                ],
              });

        $("#forma").on("submit",function(e){
            url="/admin/editloan/"+rowId;   
            $.ajax({
              type:"POST",
              url: url,
              data: $(this).serialize(),
              dataType:'json',
              success: function(data){
                alert(data.message);
                $('#modal1').modal("close");
                $('.datatable-selection-single').DataTable().ajax.reload();
              },
              error: function(data){
              }
            });
       });
        $("#formb").on("submit",function(e){
            url="/admin/crecomloan/"+rowId;   
            $.ajax({
              type:"POST",
              url: url,
              data: $(this).serialize(),
              dataType:'json',
              success: function(data){
                alert(data.message);
                $('#modal1').modal("close");
                $('.datatable-selection-single').DataTable().ajax.reload();
              },
              error: function(data){
              }
            });
       });
        $("#formc").on("submit",function(e){
            url="/admin/bodloan/"+rowId;   
            $.ajax({
              type:"POST",
              url: url,
              data: $(this).serialize(),
              dataType:'json',
              success: function(data){
                alert(data.message);
                $('#modal1').modal("close");
                $('.datatable-selection-single').DataTable().ajax.reload();
              },
              error: function(data){
              }
            });
       });
//end Trainig Add
//Training Edit
        $('#loanlist').DataTable().on('click','tr .edit',function(e){
             e.preventDefault();
                 rowId='';
                 rowId = $(this).closest('tr').find('td:eq(0)').text();
                 var url="/admin/getloanhistory/"+rowId;
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
                      $("#datefiling").val(data.datefiling);
                      $("select[name=loanstatus]").val(data.loanstatus);
                      $("#loanterms").val(data.loanterms);
                      $("select[name=loanterms]").val(data.loanterms);
                      $("#loantype").val(data.loantype);
                      $("#signaturekey2").val(data.signaturekey2);
                      $("#signaturekey1").val(data.signaturekey1);
                      $("#name").val(data.name);
                      $("#age").val(data.age);
                      $("#coid").val(data.coid);
                      $("#coname").val(data.coname);
                      $("#copassbookno").val(data.copassbookno);
                      $("#cosharecapital").val(data.cosharecapital);

                      $("#sharecapital").val(data.sharecapital);
                      $("#totalregularloan").val(data.totalregularloan);
                      $("#totalpettycashloan").val(data.totalpettycashloan);
                      $("#totalemergencyloan").val(data.totalemergencyloan);
                      $("#totalcommodityloan").val(data.totalcommodityloan);
                      $("#totalotherstloan").val(data.totalotherstloan);
                      $("#totalloans").val(data.totalloans);
                      $("#totalloanable").val(data.totalloanable);
                      $("#loanamount").val(data.loanamount);

                      $("#priorloan").val(data.priorloan);
                      $("#servicefee").val(data.servicefee);
                      $("#retentionfee").val(data.retentionfee);
                      $("#insurancefee").val(data.insurancefee);
                      $("#totaldeductions").val(data.totaldeductions);
                      $("#netproceeds").val(data.netproceeds);
                      $("#interestpercent").val(data.interestpercent);
                      $("#interestamount").val(data.interestamount);
                      $("#totalinterest").val(data.totalinterest);
                      $("#totalamount").val(data.totalamount);
                      $("#monthlyamort").val(data.monthlyamort);

                      $("#cleavecredits").val(data.cleavecredits);
                      $("#csalaryamount").val(data.csalaryamount);
                      $("#loanofficerremarks").val(data.loanofficerremarks);

                      $("#crecomremarks").val(data.crecomremarks);
                       $("#bodremarks").val(data.chairmanremarks);

                       if(data.processtagno <= 1){
                        $("#loanofficerprocess").show();
                        $("#crecomprocess").hide();
                        $("#bodprocess").hide();
                      }
                      if(data.processtagno == 3){
                        $("#loanofficerprocess").hide();
                        $("#crecomprocess").hide();
                        $("#bodprocess").show();
                      }
                      if(data.processtagno > 1){
                        $("#loanofficerprocess").hide();
                        
                      }
                      if(data.processtagno > 2){
                        $("#crecomprocess").hide();
                       
                      }
                      if(data.processtagno > 3){
                        $("#bodprocess").hide();
                       
                      }
                      
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
//end Training Edit
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
  $('.modal-clear').on('hide.bs.modal', function (e) {
    rowId='';
    $('.modal-clear:not(.active)').find('input[type=text][name!=userid]').val('');
    $('.modal-clear:not(.active)').find('input[type=date]').val('');
    $('.modal-clear:not(.active)').find('input[type=file]').val('');
    $('.modal-clear:not(.active)').find('input[type=month]').val('');
    $('.modal-title').text("Add New Data");
    $(".form-horizontal :input").prop("readonly", false);
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