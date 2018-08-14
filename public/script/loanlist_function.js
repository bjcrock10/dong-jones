$(function(){
   $("[rel='tooltip']").tooltip();
    var idno = $('input[name="idno"]').val();
    var rowId='';
    var flag='remove';
    /*$('#trainingpanel').on("click",function(){*/
        // $('#loanlist').DataTable({            
        //    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        //     ajax: '/postsdata/'+idno,
        //     columns : [
        //       { data: 'id', name: 'id' },
        //       { data: 'name', name: 'name' },
        //       { data: 'designation', name: 'designation' },
        //       { data: 'email', name: 'email' },
        //       { data: 'status', name: 'status' },
        //       { data: 'action', name: 'action', orderable : false, searchable: false},
        //     ],
        //   });
//Training Add
        $("#forma").on("submit",function(e){
           var url="/createmember";
            if(rowId != "" && flag != "1"){
              url="/editmember/"+rowId;
            }
            else if(rowId != "" && flag == "1"){
              url="/removemember/"+rowId;
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
                alert(data.responseText);
                $('#createtraining').modal("hide");
                $('#memberslistdata').DataTable().ajax.reload();
              },
              error: function(data){
              }
            });
       });
//end Trainig Add
//Training Edit
        $('.datatable-selection-single').DataTable().on('click','tr .edit',function(e){
             e.preventDefault();
             rowId='';
             alert("assasasdad");
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