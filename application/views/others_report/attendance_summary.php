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
                max-width: 1000px;
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
                    <?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?> of <?php echo htmlspecialchars($report_date, ENT_QUOTES, 'UTF-8'); ?>
                </span>
                <br /><br />
                <table class="sal" border="1" cellpadding="0" cellspacing="0" align="center">
                    <thead>
                        <tr>
                            <th style="width: 35px; text-align: center;">SL</th>
                            <th style="text-align: left; padding-left: 10px;"><?php echo htmlspecialchars($category, ENT_QUOTES, 'UTF-8'); ?> Name</th>
                            <?php if ($category == 'Section' && isset($values['by_section'])) { ?>
                            <th style="text-align: left; padding-left: 10px;">Designation</th>
                            <?php } ?>
                            <th style="width: 60px; text-align: center;">Total</th>
                            <th style="width: 65px; text-align: center;">Present</th>
                            <th style="width: 65px; text-align: center;">Absent</th>
                            <th style="width: 60px; text-align: center;">Male</th>
                            <th style="width: 60px; text-align: center;">Female</th>
                            <th style="width: 60px; text-align: center;">Leave</th>
                            <th style="width: 60px; text-align: center;">Late</th>
                            <th style="width: 90px; text-align: center;">Gross Salary</th>
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
                        $all_gross_sal = 0;

                        if (isset($values['by_designation'])) {
                            $sl = 1;
                            foreach ($values['by_designation'] as $d) {
                                $all_emp       += $d['all_emp'];
                                $all_present   += $d['all_present'];
                                $all_absent    += $d['all_absent'];
                                $all_male      += $d['all_male'];
                                $all_female    += $d['all_female'];
                                $all_leave     += $d['all_leave'];
                                $all_late      += $d['all_late'];
                                $all_gross_sal += $d['total_gross_sal'];

                                $row_bg = ($sl % 2 == 0) ? "style='background-color:#F7F7F7;'" : "";
                                echo "<tr {$row_bg}>";
                                echo "<td style='text-align:center;'>" . $sl++ . "</td>";
                                echo "<td style='padding-left:10px; text-align:left;'>" . htmlspecialchars($d['desig_name'], ENT_QUOTES, 'UTF-8') . "</td>";
                                echo "<td style='text-align:center;'>" . $d['all_emp'] . "</td>";
                                echo "<td style='text-align:center;'>" . $d['all_present'] . "</td>";
                                echo "<td style='text-align:center;'>" . $d['all_absent'] . "</td>";
                                echo "<td style='text-align:center;'>" . $d['all_male'] . "</td>";
                                echo "<td style='text-align:center;'>" . $d['all_female'] . "</td>";
                                echo "<td style='text-align:center;'>" . $d['all_leave'] . "</td>";
                                echo "<td style='text-align:center;'>" . $d['all_late'] . "</td>";
                                echo "<td style='text-align:right; padding-right:8px;'>" . number_format($d['total_gross_sal']) . "</td>";
                                echo "</tr>";
                            }
                        } elseif ($category == 'Section' && isset($values['by_section'])) {
                            $sl = 1;
                            foreach ($values['by_section'] as $sec) {
                                $desig_count = count($sec['desigs']);
                                if ($desig_count == 0) {
                                    continue;
                                }

                                $has_subtotal = ($desig_count > 1);
                                $sec_rowspan = $desig_count + ($has_subtotal ? 1 : 0);

                                foreach ($sec['desigs'] as $idx => $d) {
                                    $all_emp       += $d['all_emp'];
                                    $all_present   += $d['all_present'];
                                    $all_absent    += $d['all_absent'];
                                    $all_male      += $d['all_male'];
                                    $all_female    += $d['all_female'];
                                    $all_leave     += $d['all_leave'];
                                    $all_late      += $d['all_late'];
                                    $all_gross_sal += $d['total_gross_sal'];

                                    echo "<tr>";
                                    if ($idx === 0) {
                                        echo "<td rowspan='{$sec_rowspan}' style='text-align:center; vertical-align:middle; font-weight:bold;'>" . $sl++ . "</td>";
                                        echo "<td rowspan='{$sec_rowspan}' style='padding-left:10px; text-align:left; vertical-align:middle; font-weight:bold;'>" . htmlspecialchars($sec['sec_name']) . "</td>";
                                    }
                                    echo "<td style='padding-left:10px; text-align:left;'>" . htmlspecialchars($d['desig_name']) . "</td>";
                                    echo "<td style='text-align:center;'>" . $d['all_emp'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $d['all_present'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $d['all_absent'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $d['all_male'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $d['all_female'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $d['all_leave'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $d['all_late'] . "</td>";
                                    echo "<td style='text-align:right; padding-right:8px;'>" . number_format($d['total_gross_sal']) . "</td>";
                                    echo "</tr>";
                                }

                                if ($has_subtotal) {
                                    $sub = $sec['subtotal'];
                                    echo "<tr style='background-color:#EFEFEF; font-weight:bold;'>";
                                    echo "<td style='padding-left:10px; text-align:left; font-style:italic;'>Sub Total</td>";
                                    echo "<td style='text-align:center;'>" . $sub['all_emp'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $sub['all_present'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $sub['all_absent'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $sub['all_male'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $sub['all_female'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $sub['all_leave'] . "</td>";
                                    echo "<td style='text-align:center;'>" . $sub['all_late'] . "</td>";
                                    echo "<td style='text-align:right; padding-right:8px;'>" . number_format($sub['total_gross_sal']) . "</td>";
                                    echo "</tr>";
                                }
                            }
                        } else {
                            $count = isset($values["cat_name"]) ? count($values["cat_name"]) : 0;
                            $sl = 1;

                            for ($i = 0; $i < $count; $i++) {
                                $total_emp = (!empty($values["daily_att_sum"][$i]) && isset($values["daily_att_sum"][$i]['all_emp'])) ? intval($values["daily_att_sum"][$i]['all_emp']) : 0;

                                if ($total_emp <= 0) {
                                    continue;
                                }

                                if ($sl % 2 == 1) {
                                    echo "<tr>";
                                } else {
                                    echo "<tr style='background-color:#F7F7F7;'>";
                                }

                                echo "<td style='text-align:center;'>" . $sl++ . "</td>";
                                echo "<td style='padding-left:10px; text-align:left;'>" . htmlspecialchars($values["cat_name"][$i], ENT_QUOTES, 'UTF-8') . "</td>";

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

                                $gross_sal = (!empty($values["daily_att_sum"][$i]) && isset($values["daily_att_sum"][$i]['total_gross_sal'])) ? floatval($values["daily_att_sum"][$i]['total_gross_sal']) : 0;
                                $all_gross_sal += $gross_sal;
                                echo "<td style='text-align:right; padding-right:8px;'>" . number_format($gross_sal) . "</td>";

                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr style="font-weight:bold; text-align:center; background-color:#EAEAEA;">
                            <td colspan="<?php echo ($category == 'Section' && isset($values['by_section'])) ? 3 : 2; ?>" style="text-align:center;">Total</td>
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
                            <td style="text-align:right; padding-right:8px;"><?php echo number_format($all_gross_sal); ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </body>
</html>
