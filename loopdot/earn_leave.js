function getBaseURL() {
    var hostname = window.location.href;
    hostname = hostname.substring(0, (hostname.indexOf("index.php") == -1) ? hostname.length : hostname.indexOf("index.php"));
    return hostname;
}

function showLoader(id) {
    var loader = document.getElementById(id || 'loader');
    if (loader) loader.style.display = 'block';
}

function hideLoader(id) {
    var loader = document.getElementById(id || 'loader');
    if (loader) loader.style.display = 'none';
}

function toggle_all_checkboxes(source) {
    var checkboxes = document.querySelectorAll('#list1_body input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = source.checked;
    }
}

function getSelectedIds() {
    var checkboxes = document.querySelectorAll('#list1_body input[type="checkbox"]:checked');
    var ids = [];
    for (var i = 0; i < checkboxes.length; i++) {
        ids.push(checkboxes[i].value);
    }
    return ids.join('xxx');
}

function earn_leave_process(i) {
    var month = document.getElementById('report_month_sal').value;
    var year = document.getElementById('report_year_sal').value;
    var unit_id = document.getElementById('grid_start').value;

    if (unit_id == 'Select') {
        alert("Please select unit !");
        return;
    }

    var spl = getSelectedIds();
    if (spl == '') {
        alert("Please select Employee ID");
        return;
    }

    showLoader('loader');

    var ajaxRequest = new XMLHttpRequest();
    var url = getBaseURL() + "index.php/earn_leave_con/earn_leave_process/";
    var queryString = "month=" + month + "&year=" + year + "&process_check=" + i + '&spl=' + spl;

    ajaxRequest.open("POST", url, true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4) {
            hideLoader('loader');
            alert(ajaxRequest.responseText);
        }
    }
    ajaxRequest.send(queryString);
}

function grid_earn_leave_general_info() {
    var year = document.getElementById('report_year_sal').value;
    if (year == '') { alert("Please select year"); return; }
    var firstdate = document.getElementById('firstdate').value;
    if (firstdate == '') { alert("Please select firstdate"); return; }
    var seconddate = document.getElementById('seconddate').value;
    if (seconddate == '') { alert("Please select seconddate"); return; }
    var unit_id = document.getElementById('grid_start').value;
    if (unit_id == 'Select') { alert("Please select unit !"); return; }
    var grid_status = document.getElementById('grid_status').value;

    var spl = getSelectedIds();
    if (spl == '') { alert("Please select Employee ID"); return; }

    showLoader('clearfix_dialog');

    var ajaxRequest = new XMLHttpRequest();
    var url = getBaseURL() + "index.php/earn_leave_con/grid_earn_leave_general_info/";
    var queryString = "firstdate=" + firstdate + "&seconddate=" + seconddate + "&year=" + year + "&grid_status=" + grid_status + "&spl=" + spl + "&unit_id=" + unit_id;

    ajaxRequest.open("POST", url, true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded;charset=utf-8");
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4) {
            hideLoader('clearfix_dialog');
            var win = window.open('', '_blank', 'menubar=1,resizable=1,scrollbars=1,width=1600,height=800');
            win.document.write(ajaxRequest.responseText);
        }
    }
    ajaxRequest.send(queryString);
}

function grid_earn_leave_payment_buyer() {
    var year = document.getElementById('report_year_sal').value;
    if (year == '') { alert("Please select year"); return; }
    var firstdate = document.getElementById('firstdate').value;
    if (firstdate == '') { alert("Please select firstdate"); return; }
    var seconddate = document.getElementById('seconddate').value;
    if (seconddate == '') { alert("Please select seconddate"); return; }
    var unit_id = document.getElementById('grid_start').value;
    if (unit_id == 'Select') { alert("Please select unit !"); return; }
    var grid_status = document.getElementById('grid_status').value;

    var spl = getSelectedIds();
    if (spl == '') { alert("Please select Employee ID"); return; }

    showLoader('clearfix_dialog');

    var ajaxRequest = new XMLHttpRequest();
    var url = getBaseURL() + "index.php/earn_leave_con/grid_earn_leave_payment_buyer/";
    var queryString = "firstdate=" + firstdate + "&seconddate=" + seconddate + "&year=" + year + "&grid_status=" + grid_status + "&spl=" + spl + "&unit_id=" + unit_id;

    ajaxRequest.open("POST", url, true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded;charset=utf-8");
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4) {
            hideLoader('clearfix_dialog');
            var win = window.open('', '_blank', 'menubar=1,resizable=1,scrollbars=1,width=1600,height=800');
            win.document.write(ajaxRequest.responseText);
        }
    }
    ajaxRequest.send(queryString);
}

function grid_earn_leave_summery() {
    var year = document.getElementById('report_year_sal').value;
    if (year == '') { alert("Please select year"); return; }
    var unit_id = document.getElementById('grid_start').value;
    if (unit_id == 'Select') { alert("Please select unit !"); return; }
    var grid_status = document.getElementById('grid_status').value;

    var spl = getSelectedIds();

    showLoader('clearfix_dialog');

    var ajaxRequest = new XMLHttpRequest();
    var url = getBaseURL() + "index.php/earn_leave_con/grid_earn_leave_summery/";
    var queryString = "year=" + year + "&grid_status=" + grid_status + "&spl=" + spl + "&unit_id=" + unit_id;

    ajaxRequest.open("POST", url, true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded;charset=utf-8");
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4) {
            hideLoader('clearfix_dialog');
            var win = window.open('', '_blank', 'menubar=1,resizable=1,scrollbars=1,width=1600,height=800');
            win.document.write(ajaxRequest.responseText);
        }
    }
    ajaxRequest.send(queryString);
}

function grid_earn_leave_payment() {
    var month = document.getElementById('report_month_sal').value;
    if (month == '') { alert("Please select month"); return; }
    var year = document.getElementById('report_year_sal').value;
    if (year == '') { alert("Please select year"); return; }
    var unit_id = document.getElementById('grid_start').value;
    if (unit_id == 'Select') { alert("Please select unit !"); return; }
    var grid_status = document.getElementById('grid_status').value;

    var spl = getSelectedIds();
    if (spl == '') { alert("Please select Employee ID"); return; }

    var sal_year_month = year + "-" + month + "-01";
    showLoader('clearfix_dialog');

    var ajaxRequest = new XMLHttpRequest();
    var url = getBaseURL() + "index.php/earn_leave_con/grid_earn_leave_payment/";
    var queryString = "sal_year_month=" + sal_year_month + "&grid_status=" + grid_status + "&spl=" + spl + "&unit_id=" + unit_id;

    ajaxRequest.open("POST", url, true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded;charset=utf-8");
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4) {
            hideLoader('clearfix_dialog');
            var win = window.open('', '_blank', 'menubar=1,resizable=1,scrollbars=1,width=1600,height=800');
            win.document.write(ajaxRequest.responseText);
        }
    }
    ajaxRequest.send(queryString);
}

function grid_earn_leave_payment_at_atime() {
    var month = document.getElementById('report_month_sal').value;
    if (month == '') { alert("Please select month"); return; }
    var year = document.getElementById('report_year_sal').value;
    if (year == '') { alert("Please select year"); return; }
    var unit_id = document.getElementById('grid_start').value;
    if (unit_id == 'Select') { alert("Please select unit !"); return; }
    var grid_status = document.getElementById('grid_status').value;

    var spl = getSelectedIds();
    if (spl == '') { alert("Please select Employee ID"); return; }

    var sal_year_month = year + "-" + month + "-01";
    showLoader('clearfix_dialog');

    var ajaxRequest = new XMLHttpRequest();
    var url = getBaseURL() + "index.php/earn_leave_con/grid_earn_leave_payment_at_atime/";
    var queryString = "sal_year_month=" + sal_year_month + "&grid_status=" + grid_status + "&spl=" + spl + "&unit_id=" + unit_id;

    ajaxRequest.open("POST", url, true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded;charset=utf-8");
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4) {
            hideLoader('clearfix_dialog');
            var win = window.open('', '_blank', 'menubar=1,resizable=1,scrollbars=1,width=1600,height=800');
            win.document.write(ajaxRequest.responseText);
        }
    }
    ajaxRequest.send(queryString);
}

function all_search() {
    var year = document.getElementById('report_year_sal').value;
    if (year == '') { alert("Please select year"); return; }

    var start = document.getElementById('grid_start').value;
    var dept = document.getElementById('grid_dept').value;
    var section = document.getElementById('grid_section').value;
    var line = document.getElementById('grid_line').value;
    var designation = document.getElementById('grid_desig').value;
    var sex = document.getElementById('grid_sex').value;
    var status = document.getElementById('grid_status').value;

    var url = getBaseURL() + "index.php/earn_leave_con/all_search/" + dept + "/" + section + "/" + line + "/" + designation + "/" + sex + "/" + status + "/" + start;
    main_grid(url);
}

function main_grid(url) {
    showLoader('loader');
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.open("GET", url, true);
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4) {
            hideLoader('loader');
            if (ajaxRequest.status == 200) {
                var data = JSON.parse(ajaxRequest.responseText);
                renderTable(data.rows || data);
            }
        }
    }
    ajaxRequest.send();
}

function renderTable(rows) {
    var tbody = document.getElementById('list1_body');
    var totalRecords = document.getElementById('total_records');
    tbody.innerHTML = '';
    
    if (!rows || rows.length === 0) {
        tbody.innerHTML = '<tr><td colspan="3" align="center">No data found</td></tr>';
        totalRecords.innerText = '0';
        return;
    }

    var html = '';
    for (var i = 0; i < rows.length; i++) {
        var row = rows[i];
        var id = row.id || row.cell[0];
        var name = row.emp_full_name || row.cell[1];
        html += '<tr>' +
                '<td><input type="checkbox" value="' + id + '"></td>' +
                '<td>' + id + '</td>' +
                '<td>' + name + '</td>' +
                '</tr>';
    }
    tbody.innerHTML = html;
    totalRecords.innerText = rows.length;
}

function grid_get_all_data() {
    var start = document.getElementById('grid_start').value;
    if (start == "Select" || start == '') {
        alert("Please select Unit");
        return;
    }

    var ajaxRequest = new XMLHttpRequest();
    var url = getBaseURL() + "index.php/payroll_con/manual_atten_co/";
    var queryString = "start=" + start;

    ajaxRequest.open("POST", url, true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4) {
            var resp = ajaxRequest.responseText;
            var alldata = resp.split("$$$");

            populateSelect('grid_dept', alldata[0], true);
            populateSelect('grid_section', alldata[1], true);
            populateSelect('grid_line', alldata[2], true);
            populateSelect('grid_desig', alldata[3], true);
            
            // Sex: already hardcoded in original but let's be safe
            var sex_id = ["1", "2"];
            var sex_name = ["Male", "Female"];
            var sexSelect = document.getElementById('grid_sex');
            sexSelect.options.length = 0;
            sexSelect.options[0] = new Option("Select", "Select", true, false);
            for (var i = 0; i < sex_id.length; i++) {
                sexSelect.options[i + 1] = new Option(sex_name[i], sex_id[i], false, false);
            }

            populateSelect('grid_status', alldata[4], false, "ALL");

            var searchUrl = getBaseURL() + "index.php/earn_leave_con/get_all_data/" + start;
            main_grid(searchUrl);
        }
    }
    ajaxRequest.send(queryString);
}

function populateSelect(id, dataStr, includeSelect, defaultVal) {
    var select = document.getElementById(id);
    if (!select) return;
    select.options.length = 0;
    
    var parts = dataStr.split("===");
    if (parts.length < 2) return;
    
    var ids = parts[0].split("***");
    var names = parts[1].split("***");
    
    var offset = 0;
    if (includeSelect) {
        select.options[0] = new Option("Select", "Select", true, false);
        offset = 1;
    }
    
    for (var i = 0; i < ids.length; i++) {
        var isSelected = (defaultVal && (names[i] == defaultVal || ids[i] == defaultVal));
        select.options[i + offset] = new Option(names[i], ids[i], isSelected, isSelected);
    }
}