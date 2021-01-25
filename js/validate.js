$(document).ready(function () {
    $('#answer_form').on('submit', function(event){
    var count_data = 0;
    $('#answer').each(function(){
        count_data = count_data + 1;
    });
    if(count_data > 0)
    {
        var answer_form = $(this).serialize();     
        alert(answer_form);  
        $.ajax({
            url: "../database/mutation/quiz/validateAnswer.php",
            method: "POST",
            data: answer_form,
            success:function(data)
            {
                //data = data.split("New record created successfully. Last inserted ID is: ").pop();
                location.replace("../student/quiz-code.php");
            }
        })
    }
    });
});
