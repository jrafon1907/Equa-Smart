<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Log</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            width: 85%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid mediumaquamarine;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .log-title {
            font-size: 26px;
            color: black;
            margin: 0;
            padding: 0;
        }
        .logo img {
            max-width: 200px;
            height: auto;
            border-radius: 4px;
        }
        .info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .info .date, .info .temperature {
            flex: 1;
            padding: 0 10px;
        }
        .info .date span, .info .temperature span {
            font-weight: bold;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        thead th {
            background-color: mediumaquamarine;
            color: white;
            padding: 12px;
            text-align: center;
            font-size: 16px;
        }
        tbody td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }
        tbody td:first-child {
            text-align: left;
            font-weight: bold;
            background-color: #f9f9f9;
        }
        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        tbody td span {
            font-weight: bold;
            color: mediumaquamarine;
        }
        tbody td:nth-child(2), tbody td:nth-child(3), tbody td:nth-child(4) {
            text-align: center;
        }
        td p {
            margin: 0;
        }
        .notes {
            padding-top: 10px;
            font-size: 14px;
            color: #555;
            border-top: 2px solid mediumaquamarine;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="log-title">
                <h1>Daily Log</h1>
            </div>
            <div class="logo">
                <img src="images/logo.png" alt="Description of the image" title="Image Tooltip">
            </div>
        </div>

        <div class="info">
            <div class="date">
                <p>Date: <span>Nov 15, 2017</span></p>
            </div>
            <div class="temperature">
                <p>Water Temp: <span>16°</span></p>
                <p>Indoor Temp: <span>18° (high) / 7° (low)</span></p>
                <p>Outdoor Temp: <span>10° (high) / 3° (low)</span></p>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Morning</th>
                    <th>Midday</th>
                    <th>Evening</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Record pH (normal is 6.5–6.6)</td>
                    <td>pH: <span>6.5</span></td>
                    <td></td>
                    <td>pH: <span>6.5</span></td>
                </tr>
                <tr>
                    <td>Plant observation</td>
                    <td>&#10003;</td>
                    <td></td>
                    <td>&#10003;</td>
                </tr>
                <tr>
                    <td>Fish observation</td>
                    <td>&#10003;</td>
                    <td></td>
                    <td>&#10003;</td>
                </tr>
                <tr>
                    <td>
                        Feed Fish:<br>
                        - see Cohort Logs for daily feed rate<br>
                        - spread daily feed rate across 2 or 3 feedings<br>
                        - one scoop is <span>100</span> grams
                    </td>
                    <td>Tank 1 (grams)<br><span>250</span><br>Tank 2 (grams)<br><span>600</span><br>Tank 3 (grams)<br><span>1000</span></td>
                    <td>Tank 1 (grams)<br><span>250</span><br>Tank 2 (grams)<br><span>600</span><br>Tank 3 (grams)<br><span>1000</span></td>
                    <td>Tank 1 (grams)<br><span>250</span><br>Tank 2 (grams)<br><span>600</span><br>Tank 3 (grams)<br><span>1000</span></td>
                </tr>
                <tr>
                    <td>Shake calcium sock (every 1-3 days)</td>
                    <td>&#10003;</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Clean trough standpipe filters</td>
                    <td></td>
                    <td>&#10003;</td>
                    <td>&#10003;</td>
                </tr>
                <tr>
                    <td>Water seedlings</td>
                    <td></td>
                    <td>&#10003;</td>
                    <td>&#10003;</td>
                </tr>
                <tr>
                    <td>Flush (pop) SPAs for Tanks 1-3</td>
                    <td></td>
                    <td>&#10003;</td>
                    <td>&#10003;</td>
                </tr>
                <tr>
                    <td>Check sump level and fill as needed</td>
                    <td></td>
                    <td>&#10003;</td>
                    <td>&#10003;</td>
                </tr>
                <tr>
                    <td>Check CFB filters and clean as needed</td>
                    <td></td>
                    <td></td>
                    <td>&#10003;</td>
                </tr>
                <tr>
                    <td>Check pest traps</td>
                    <td></td>
                    <td></td>
                    <td>&#10003;</td>
                </tr>
                <tr>
                    <td colspan="4" class="notes">Notes:</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
