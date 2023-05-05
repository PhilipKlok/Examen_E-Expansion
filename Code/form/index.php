<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Document</title>
    </head>
    <body>
        <form>
            <div>
                <label>Select Insurance Type:</label>
                <select id="insuranceType" multiple size="4">
                    <option value="life">Life Insurance</option>
                    <option value="auto">Auto Insurance</option>
                    <option value="health">Health Insurance</option>
                    <option value="home">Homeowners Insurance</option>
                </select>
            </div>
            <div>
                <label>Select Insurance Company:</label>
                <select id="insuranceCompany" multiple size="4" multiple>
                    <option value="progressive">Progressive</option>
                    <option value="statefarm">State Farm</option>
                    <option value="allstate">Allstate</option>
                </select>
            </div>
            <input type="submit" value="Submit" />
        </form>

        <script src="app.js"></script>
    </body>
</html>