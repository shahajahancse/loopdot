<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/print.css" media="print" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/SingleRow.css" />
        <style type="text/css">
            table.sal {
                border-collapse: collapse;
                width: 95%;
                max-width: 900px;
                margin: 0 auto;
                font-family: Arial, sans-serif;
                font-size: 11px;
            }
            table.sal th {
                background-color: #f2f2f2;
                font-weight: bold;
                padding: 6px 8px;
                border: 1px solid #000;
                text-align: center;
            }
            table.sal td {
                padding: 5px 6px;
                border: 1px solid #000;
            }
            @media print {
                #no_print {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <div style="margin:0 auto; width:auto;">
            <div id="no_print" style="float:right; margin: 10px;">
                <button type="button" onclick="window.print()" style="padding: 5px 15px; font-weight: bold; cursor: pointer;">Print</button>
            </div>
            <?php
            $data['unit_id'] = $unit_id;
            $this->load->view("head_english", $data);
            ?>
            <!--Report title goes here-->
            <div align="center" style="margin:0 auto; overflow:hidden; font-family: 'Times New Roman', Times, serif;">
                <span style="font-size:14px; font-weight:bold;">
                    <?php echo $title; ?> of <?php echo $report_date; ?>
                </span>
                <br /><br />
                <table class="sal" border="1" cellpadding="0" cellspacing="0" align="center">
                    <thead>
                        <tr>
                            <th style="width: 35px; text-align: center;">SL</th>
                            <th style="text-align: left; padding-left: 10px;"><?php echo $category; ?> Name</th>
                            <th style="width: 60px; text-align: center;">Total</th>
                            <th style="width: 65px; text-align: center;">Present</th>
                            <th style="width: 65px; text-align: center;">Absent</th>
                            <th style="width: 60px; text-align: center;">Male</th>
                            <th style="width: 60px; text-align: center;">Female</th>
                            <th style="width: 60px; text-align: center;">Leave</th>
                            <th style="width: 60px; text-align: center;">Late</th>
                            <th style="width: 75px; text-align: center;">Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $all_emp = 0;
                        $all_present = 0;
                        $all_absent = 0;
                        $all_leave = 0;
                        $all_late = 0;
                        $all_male = 0;
                        $all_female = 0;

                        $count = count($values["cat_name"]);
                        $sl = 1;

                        for ($i = 0; $i < $count; $i++) {
                            $total_emp = (!empty($values["daily_att_sum"][$i]) && isset($values["daily_att_sum"][$i]['all_emp'])) ? intval($values["daily_att_sum"][$i]['all_emp']) : 0;

                            // Skip sections with totally 0 manpower
                            if ($total_emp <= 0) {
                                continue;
                            }

                            if ($sl % 2 == 1) {
                                echo "<tr>";
                            } else {
                                echo "<tr style='background-color:#F7F7F7;'>";
                            }

                            echo "<td style='text-align:center;'>" . $sl++ . "</td>";
                            echo "<td style='padding-left:10px; text-align:left;'>" . $values["cat_name"][$i] . "</td>";

                            echo "<td style='text-align:center;'>";
                            echo $total_emp;
                            $all_emp += $total_emp;
                            echo "</td>";

                            echo "<td style='text-align:center;'>";
                            $present = (!empty($values["daily_att_sum"][$i]) && isset($values["daily_att_sum"][$i]['all_present'])) ? intval($values["daily_att_sum"][$i]['all_present']) : 0;
                            echo $present;
                            $all_present += $present;
                            echo "</td>";

                            echo "<td style='text-align:center;'>";
                            $absent = (!empty($values["daily_att_sum"][$i]) && isset($values["daily_att_sum"][$i]['all_absent'])) ? intval($values["daily_att_sum"][$i]['all_absent']) : 0;
                            echo $absent;
                            $all_absent += $absent;
                            echo "</td>";

                            echo "<td style='text-align:center;'>";
                            $male = (!empty($values["daily_att_sum"][$i]) && isset($values["daily_att_sum"][$i]['all_male'])) ? intval($values["daily_att_sum"][$i]['all_male']) : 0;
                            echo $male;
                            $all_male += $male;
                            echo "</td>";

                            echo "<td style='text-align:center;'>";
                            $female = (!empty($values["daily_att_sum"][$i]) && isset($values["daily_att_sum"][$i]['all_female'])) ? intval($values["daily_att_sum"][$i]['all_female']) : 0;
                            echo $female;
                            $all_female += $female;
                            echo "</td>";

                            echo "<td style='text-align:center;'>";
                            $leave = (!empty($values["daily_att_sum"][$i]) && isset($values["daily_att_sum"][$i]['all_leave'])) ? intval($values["daily_att_sum"][$i]['all_leave']) : 0;
                            echo $leave;
                            $all_leave += $leave;
                            echo "</td>";

                            echo "<td style='text-align:center;'>";
                            $late = (!empty($values["daily_att_sum"][$i]) && isset($values["daily_att_sum"][$i]['all_late'])) ? intval($values["daily_att_sum"][$i]['all_late']) : 0;
                            echo $late;
                            $all_late += $late;
                            echo "</td>";

                            echo "<td style='text-align:center;'></td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr style="font-weight:bold; text-align:center; background-color:#EAEAEA;">
                            <td colspan="2" style="text-align:center;">Total</td>
                            <td><?php echo $all_emp; ?></td>
                            <td>
                                <?php
                                echo $all_present;
                                if ($all_present == 0 || $all_emp == 0) {
                                    echo "<br> (0 %)";
                                } else {
                                    $p_percent = round((($all_present * 100) / $all_emp), 2);
                                    echo "<br> ($p_percent%)";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $all_absent;
                                if ($all_absent == 0 || $all_emp == 0) {
                                    echo "<br> (0 %)";
                                } else {
                                    $p_absent = round((($all_absent * 100) / $all_emp), 2);
                                    echo "<br> ($p_absent%)";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $all_male;
                                if ($all_male == 0 || $all_emp == 0) {
                                    echo "<br> (0 %)";
                                } else {
                                    $p_male = round((($all_male * 100) / $all_emp), 2);
                                    echo "<br> ($p_male%)";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $all_female;
                                if ($all_female == 0 || $all_emp == 0) {
                                    echo "<br> (0 %)";
                                } else {
                                    $p_female = round((($all_female * 100) / $all_emp), 2);
                                    echo "<br> ($p_female%)";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $all_leave;
                                if ($all_leave == 0 || $all_emp == 0) {
                                    echo "<br> (0 %)";
                                } else {
                                    $p_leave = round((($all_leave * 100) / $all_emp), 2);
                                    echo "<br> ($p_leave%)";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $all_late;
                                if ($all_late == 0 || $all_emp == 0) {
                                    echo "<br> (0 %)";
                                } else {
                                    $p_late = round((($all_late * 100) / $all_emp), 2);
                                    echo "<br> ($p_late%)";
                                }
                                ?>
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </body>
</html>
