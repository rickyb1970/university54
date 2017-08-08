$(function(){
      
    $("#studentNo").on("blur",function(){
            var verification = $('input[name=_token]').val();
            var searchCriteria = $('#studentNo').val();
            var inputState;

            if(this.value === '')
               this.focus();

            $.ajax({
                url: '/students/check',
                type: 'POST',
                dataType: 'json', 
                async: false,   //to be deprecated
                data: {search: searchCriteria, _token: verification},
                success: function(result){
                        //console.log(result.result);
                        if(result.result)
                            inputState = true;
                        else {
                        //     //$('#studentNo').focus();
                            inputState = false;
                        }    
                        // getResult(result.result);
                }
            });
           console.log(inputState); 
           if(!inputState) 
              this.focus();
    });
    

    $('#colleges').on("focus change",function(){
            var verification = $('input[name=_token]').val();
            var selectedCollege = $('#colleges').val();
            
            $.ajax({
                url: '/programslist',
                type: 'POST',
                data: { collegeid: selectedCollege, _token: verification },
                dataType : 'json',
                success: function(programlist){
                    $('#programs').prop('disabled',false);
                    $('#programs').empty();
                    for(var index in programlist){
                        console.log(programlist[index].programname);
                        $('#programs').append('<option value='+programlist[index].programid+'>'+programlist[index].programname+'</option>');
                    }   
                }
            });
    });
});