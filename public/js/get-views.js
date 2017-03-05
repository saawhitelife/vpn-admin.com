$(function() {
    $("#get-companies").click(function() {
        $.get("/companies", function(data) {
            $("#main-screen").html(data);
        });
    });

    $("#get-users").click(function() {
        $.get("/users", function(data) {
            $("#main-screen").html(data);
        });
    });

    $("#get-abusers").click(function() {
        $.get("/abusers", function(data) {
            $("#main-screen").html(data);
        });
    });

    $(document).on("click", "#submit", function(f) {
        f.preventDefault();
        var data = {}
        var link = $('#generateReportForm').attr('action');
        console.log($("#generateReportForm").serializeArray().map(function(x){data[x.name] = x.value;}));

        successFn = function() {
            alert('successFn')
        }

        $.ajax({
            url: link,
            type: 'POST',
            data: $('#generateReportForm').serialize(),
            dataType: 'json',
            success: successFn(),
            headers: {
                'X_CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 'application/json' }
        });
    });

    $(document).on("click", "#add-user", function() {
        $.get("/users/create", function(data) {
            $(data).insertBefore($("#users"));
        });
    });

    $(document).on("click", "#edit-user", function() {
        var user_id = $(this).val()

        $.get("/users/" + user_id + '/edit', function(data) {
            $(data).insertBefore($("#users"));
        });
    });

    $(document).on("click", "#delete-user", function() {
        var user_id = $(this).val()

        deleteUser = function() {
            $("#user-" + user_id).remove();
        }

        $.ajax({
            url: '/users/' + user_id,
            type: 'DELETE',
            data: { '_token': $('meta[name="csrf-token"]').attr('content') },
            success: deleteUser
        });
    });

    $(document).on("click", "#edit-company", function() {
        var company_id = $(this).val()

        $.get("/companies/" + company_id + '/edit', function(data) {
            $(data).insertBefore($("#companies"));
        });
    });

    $(document).on("click", "#add-company", function() {
        $.get("/companies/create", function(data) {
            $(data).insertBefore($("#companies"));
        });
    });

    $(document).on("click", "#delete-company", function() {
        var company_id = $(this).val()

        deleteCompany = function() {
            $("#company-" + company_id).remove();
        }

        $.ajax({
            url: '/companies/' + company_id,
            type: 'DELETE',
            data: { '_token': $('meta[name="csrf-token"]').attr('content') },
            success: deleteCompany
        });
    });

});