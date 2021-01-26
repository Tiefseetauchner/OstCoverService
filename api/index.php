<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OST Cover Service API Documentation</title>
</head>
<body>
<h1>OST Cover Service</h1>
<h2>Song</h2>
<p>Show information about one ore multiple Songs</p>
<ul>
    <li>URL<br/>
        <a href="./rest/song">/api/rest/song?id=<i>id</i></a>
    </li>
    <li>URL Params<br/>
        <b>Optional</b><br/>
        id=[string]
    </li>
    <li>Data Params<br/>
        none
    </li>
    <li>
        Success Response
        <ul>
            <li><b>Code:</b> 200
                Content: <code>{{"67872394":{"id":"67872394","name":"space for Midnight","artist":"Karan
                    Vance","trackNumber":-1,"duration":3.91}}</code>
            </li>
        </ul>
    </li>
    <li>
        Error Response
        <ul>
            <li><b>Code:</b> 404
                Content: <code>{"timestamp":"2020-12-09T12:31:01+01:00","status":404,"error":"Not
                    found","message":"Requested ID was not found","path":"api\/rest\/song"}</code>
            </li>
        </ul>
    </li>
</ul>
<h2>Original Sound Track</h2>
<p>Show information about one ore multiple OSTs</p>
<ul>
    <li>URL<br/>
        <a href="./rest/originalsoundtrack">/api/rest/originalsoundtrack?id=<i>id</i></a>
    </li>
    <li>URL Params<br/>
        <b>Optional</b><br/>
        id=[string]
    </li>
    <li>Data Params<br/>
        none
    </li>
    <li>
        Success Response
        <ul>
            <li><b>Code:</b> 200
                Content: <code>{"035D0C57":{"id":"035D0C57","name":"No
                    justice","videoGame":"Czechdorile","releaseYear":2015,"songList":[]}}</code>
            </li>
        </ul>
    </li>
    <li>
        Error Response
        <ul>
            <li><b>Code:</b> 404
                Content: <code>{"timestamp":"2020-12-09T12:14:53+01:00","status":404,"error":"Not
                    found","message":"Requested ID was not found","path":"api/rest/originalsoundtrack"}</code>
            </li>
        </ul>
    </li>
</ul>
<h2>Original Sound Track songs</h2>
<p>Show information about one OSTs with songlist <br/>
    (This is in order to keep load on SQL Backend low, as it only requests songs for one OST)</p>
<ul>
    <li>URL<br/>
        <a href="./rest/originalsoundtrack/song">/api/rest/originalsoundtrack/song?id=<i>id</i></a>
    </li>
    <li>URL Params<br/>
        <b>Required</b><br/>
        id=[string]
    </li>
    <li>Data Params<br/>
        none
    </li>
    <li>
        Success Response
        <ul>
            <li><b>Code:</b> 200
                Content: <code>{"6A75672F":{"id":"6A75672F","name":"Favoritism","videoGame":"Masdevi","releaseYear":3245,"songList":{"02B6FC35":{"id":"02B6FC35","name":"Tender
                    Happiness","artist":"Anand
                    Carlson","trackNumber":1,"duration":7.41},"45A66808":{"id":"45A66808","name":"fun at
                    Life","artist":"Brittany
                    Levy","trackNumber":2,"duration":5.89},"4720D2A6":{"id":"4720D2A6","name":"flowers in
                    soul","artist":"Gabrielle
                    Terry","trackNumber":3,"duration":4.33},"CCD3013E":{"id":"CCD3013E","name":"restful
                    valentine","artist":"Darcey Dawe","trackNumber":4,"duration":9.36}}}}</code>
            </li>
        </ul>
    </li>
    <li>
        Error Response
        <ul>
            <li><b>Code:</b> 404
                Content: <code>{"timestamp":"2020-12-09T12:25:11+01:00","status":404,"error":"Not
                    found","message":"Requested ID was not found","path":"api/rest/originalsoundtrack/songs"}</code>
            </li>
            OR
            <li><b>Code:</b> 400
                Content: <code>{"timestamp":"2020-12-09T12:23:53+01:00","status":400,"error":"Bad
                    Request","message":"Request malformed. ID is Required (to keep the load
                    manageable)","path":"api/rest/originalsoundtrack/songs"}</code>
            </li>
        </ul>
    </li>
</ul>
<footer>
    <hr>
    <p>&#169; 2020 Christoph Tauchner</p>
</footer>
</body>
</html>