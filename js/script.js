// Add Record
function addRecord() {
    // get values
    var hostname = $("#hostname").val();
    hostname = hostname.trim();
    var ip = $("#ip").val();
    ip = ip.trim();
    var user_so = $("#user_so").val();
    user_so = user_so.trim();
    var pass = $("#pass").val();
    pass = pass.trim();
    var so = $("#so").val();
    so = so.trim();
    var obser = $("#obser").val();
    obser = obser.trim();

    if (hostname == "") {
        alert("Hostname field is required!");
    } else if (ip == "") {
        alert("Ip field is required!");
    } else if (user_so == "") {
        alert("User SO field is required!");
    } else if (pass == "") {
        alert("Password field is required!");
    } else if (so == "") {
        alert("So field is required!");
    } else if (obser == "") {
        alert("Observaciones field is required!");
    } else {
        // Add record
        $.post("ajax/create.php", {
            hostname: hostname,
            ip: ip,
            user_so: user_so,
            pass: pass,
            so: so,
            obser: obser
        }, function(data, status) {
            // close the popup
            $("#add_new_record_modal").modal("hide");

            // read records again
            readRecords();

            // clear fields from the popup
            $("#hostname").val("");
            $("#ip").val("");
            $("#user_so").val("");
            $("#pass").val("");
            $("#so").val("");
            $("#obser").val("");
        });
    }
}

// READ records
function readRecords() {
    $.get("ajax/read.php", {}, function(data, status) {
        $(".records_content").html(data);
    });
}

function GetUserDetails(id) {
    // Add User ID to the hidden field
    $("#hidden_user_id").val(id);
    $.post("ajax/details.php", {
            id: id
        },
        function(data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assign existing values to the modal popup fields
            $("#update_hostname").val(user.hostname);
            $("#update_ip").val(user.ip);
            $("#update_user_so").val(user.user_so);
            $("#update_pass").val(user.pass);
            $("#update_so").val(user.so);
            $("#update_obser").val(user.obser);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var hostname = $("#update_hostname").val();
    hostname = hostname.trim();
    var ip = $("#update_ip").val();
    ip = ip.trim();
    var user_so = $("#update_user_so").val();
    user_so = user_so.trim();
    var pass = $("#update_pass").val();
    pass = pass.trim();
    var so = $("#update_so").val();
    so = so.trim();
    var obser = $("#update_obser").val();
    obser = obser.trim();

    if (hostname == "") {
        alert("Hostname field is required!");
    } else if (ip == "") {
        alert("Ip field is required!");
    } else if (user_so == "") {
        alert("User SO field is required!");
    } else if (pass == "") {
        alert("Password field is required!");
    } else if (so == "") {
        alert("So field is required!");
    } else if (obser == "") {
        alert("Observaciones field is required!");
    } else {
        // get hidden field value
        var id = $("#hidden_user_id").val();

        // Update the details by requesting to the server using ajax
        $.post("ajax/update.php", {
                id: id,
                hostname: hostname,
                ip: ip,
                user_so: user_so,
                pass: pass,
                so: so,
                obser: obser
            },
            function(data, status) {
                // hide modal popup
                $("#update_user_modal").modal("hide");
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/delete.php", {
                id: id
            },
            function(data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

$(document).ready(function() {
    // READ records on page load
    readRecords(); // calling function
});