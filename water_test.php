<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phase 4 - Fish Sampling and Water Testing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid mediumaquamarine;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 28px;
            margin: 0;
            text-transform: uppercase;
            font-weight: bold;
            color: black
        }
        .header img {
            max-height: 80px;
            border-radius: 4px;
        }
        .header p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 22px;
            font-weight: bold;
            text-transform: uppercase;
            margin: 0;
            padding-bottom: 10px;
            border-bottom: 2px solid mediumaquamarine;
            position: relative;
        }
        .section h2 .completed {
            position: absolute;
            right: 0;
            top: 0;
            display: flex;
            align-items: center;
            font-size: 14px;
            color: mediumaquamarine
            ;
        }
        .section .content {
            margin-top: 15px;
        }
        .section .content p {
            margin: 10px 0;
        }
        .section .content input[type="text"] {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
            width: 200px;
            font-family: inherit;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        .section .content em {
            display: block;
            margin-top: 5px;
            color: #555;
        }
        .notes {
            border-top: 2px solid mediumaquamarine;
            padding-top: 10px;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>Phase 4<br>Fish Sampling and Water Testing</h1>
            <div>
                <img src="images/logo.png" alt="Description of the image" title="Image Tooltip">
                <p>Date: __________________</p>
            </div>
        </div>

        <div class="section">
            <h2>Fish Sampling
                <div class="completed">
                    <label for="fish-sampling-completed">Completed</label>
                    <input type="checkbox" id="fish-sampling-completed">
                </div>
            </h2>
            <div class="content">
                <p>- Sample Tank 1, 2 or 3 (rotate weekly). Tank sampled:<input type="text"></p>
                <p>- Record sample on Fish Sample Log. Transfer mean average weight to Cohort Log.</p>
                <p>- Complete Cohort Log.</p>
            </div>
        </div>

        <div class="section">
            <h2>Water Testing
                <div class="completed">
                    <label for="water-testing-completed">Completed</label>
                    <input type="checkbox" id="water-testing-completed">
                </div>
            </h2>
            <div class="content">
                <p>pH:<input type="text"></p>
                <p>Ammonia:<input type="text"></p>
                <p>Nitrites:<input type="text"></p>
                <p>Dissolved oxygen:<input type="text"> <em>Take samples from a tank inlet spout.</em></p>
                <p>Nitrates:<input type="text"></p>
                <p>Calcium:<input type="text"></p>
                <p>Potassium:<input type="text"></p>
                <p>Iron:<input type="text"> <em>Take samples from a trough inlet spout.</em></p>
                <p>Source water pH:<input type="text"></p>
                <p>Source water hardness:<input type="text"> <em>Take samples from source water (before it enters system).</em></p>
                <p><em>Confirm chemical pH is the same as digital pH.</em></p>
            </div>
        </div>

        <div class="section">
            <h2>Waste Management
                <div class="completed">
                    <label for="waste-management-completed">Completed</label>
                    <input type="checkbox" id="waste-management-completed">
                </div>
            </h2>
            <div class="content">
                <p>- Draw solids from settling tank to fermentation tank.</p>
                <p>- Drain supernatant from settling tank.</p>
                <p>- Refill settling tank from Waste Tanks.</p>
                <p>- If fermentation complete in fermentation tank, bottle for use.</p>
                <p>- Recycle fertilizer back into system (optional). Amount added:<input type="text"></p>
            </div>
        </div>

        <div class="notes">
            <p>Notes:</p>
        </div>
    </div>

</body>
</html>
