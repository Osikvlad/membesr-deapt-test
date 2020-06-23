{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>--}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
    $('select').selectpicker();
</script>
<script>
    function validate()
    {
        var firstName = document.forms["submit-form"]["first_name"].value;
        var lastName = document.forms["submit-form"]["last_name"].value;
        var middleName = document.forms["submit-form"]["middle_name"].value;
        var gender = document.forms["submit-form"]["gender"].value;
        var salary = document.forms["submit-form"]["salary"].value;
        var department = document.forms["submit-form"]["departments[]"].value;
        if(firstName == "" || lastName == "" || middleName == "" || gender == "" || salary == "" || department == ""){
            if(firstName == ""){
                document.getElementById('invalid_first_name').classList.remove('d-none');
            } else {
                document.getElementById('invalid_first_name').classList.add('d-none');
            }
            if(lastName == ""){
                document.getElementById('invalid_last_name').classList.remove('d-none');
            } else {
                document.getElementById('invalid_last_name').classList.add('d-none');
            }
            if(middleName == ""){
                document.getElementById('invalid_middle_name').classList.remove('d-none');
            } else {
                document.getElementById('invalid_middle_name').classList.add('d-none');
            }
            if(gender == ""){
                document.getElementById('invalid_gender_name').classList.remove('d-none');
            } else {
                document.getElementById('invalid_gender_name').classList.add('d-none');
            }
            if(salary == ""){
                document.getElementById('invalid_salary_name').classList.remove('d-none');
            } else {
                document.getElementById('invalid_salary_name').classList.add('d-none');
            }
            if(department == ""){
                document.getElementById('invalid_department_name').classList.remove('d-none');
            } else {
                document.getElementById('invalid_department_name').classList.add('d-none');
            }
            return false;
        }

    }
</script>
