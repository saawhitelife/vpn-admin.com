$(document).ready(function() {
    // generate companies list
    $(".load-companies").click(function() {
        $.get("/companies", function(data) {
            // successful query
            $("#container").remove();
            var container = $("<div id='container'></div>");
            var button_create = $("<button class='btn btn-xs btn-detail create-company'>Create company</button>");
            container.append(button_create);
            var list = $("<ul id='companies-list'></ul>");
            container.append(list);
            $("body").append(container);
            for (i = 0; i < data.length; i++) {
                console.log(data[i]);
                var company = $("<li></li>");
                var button_edit = $("<button class='btn btn-xs btn-detail edit-company'>Edit company</button>").attr("value", data[i]['company_id']);
                var button_remove = $("<button class='btn btn-xs btn-detail remove-company'>Remove company</button>").attr("value", data[i]['company_id']);
                company.append(data[i]["company_name"] + " | " + data[i]['company_quota'] + " || ");
                company.append(button_edit);
                company.append(" | ");
                company.append(button_remove);
                $("#companies-list").append(company);
            }
        })
    });

    // generate users list
    $(".load-users").click(function() {
        $.get("/users", function(data) {
            // successful query
            $("#container").remove();
            var container = $("<div id='container'></div>");
            var button_create = $("<button class='btn btn-xs btn-detail create-user'>Create user</button>");
            container.append(button_create);
            var list = $("<ul id='users-list'></ul>");
            container.append(list);
            $("body").append(container);
            for (i = 0; i < data.length; i++) {
                console.log(data[i]);
                var button_edit = $("<button class='btn btn-xs btn-detail edit-user'>Edit user</button>").attr("value", data[i]['user_id']);
                var button_remove = $("<button class='btn btn-xs btn-detail remove-user'>Remove user</button>").attr("value", data[i]['user_id']);
                var user = $("<li></li>");
                user.append(data[i]["user_name"] + " | " + data[i]['user_email'] + " | " + data[i]['company']['company_name'] + " || ");
                user.append(button_edit);
                user.append(" | ");
                user.append(button_remove);
                $("#users-list").append(user);
            }
        })
    });

    $(document).on("click", ".create-company", function() {
        var create_company_form = $("<form></form>").attr("method", "POST").attr("action", "/companies").attr("id", "create-company-form");
        var input_company_name = $("<input>").attr("type", "text").attr("name", "company_name");
        var input_company_quota = $("<input>").attr("type", "text").attr("name", "company_quota");
        var create_company_submit = $("<input>").attr("type", "submit").attr("id", "create-company-submit");
        var hide_button = $("<button class='btn btn-xs btn-detail hide-form'>Hide creation form</button>");
        create_company_form.append(input_company_name).append(input_company_quota).append(create_company_submit);
        $("#container").prepend(create_company_form);
        $("#container").prepend(hide_button);
    });

    $(document).on("click", ".hide-form", function() {
        $("#create-company-form").remove();
        $(this).remove();
    });

    $(document).on("click", "#create-company-submit", function(f) {
        f.preventDefault();
        var link = $('#create-company-form').attr('action');
        var data = JSON.stringify($("#create-company-form").serializeArray());

        successFn = function() {
            $("#create-company-form").remove();
            $(".hide-form").remove();
            console.log(JSON.parse(data));
        }

        $.ajax({
            url: link,
            type: 'POST',
            data: data,
            dataType: 'json',
            success: successFn(),
            headers: {
                'X_CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 'application/json' }
        });
    });

});
