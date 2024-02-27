<html>

<head>

    <style>
        /*----------------genealogy-scroll----------*/
        body {
            background-color: #eee;
            font-family: Tahoma, Arial, sans-serif;
            margin: 0;
        }

        section {
            margin: 0 8px;
        }

        .header-text {
            color: white;
            background:#31b191;
            border: double 5px white;
            border-radius: 1em;
            text-align: center;
            padding: 5px 0;
        }

        .header-text h1,
        .header-text h6 {
            margin: 0;
        }

        .header-text h1 {
            font-size: 1.5em;
        }

        .half-circle-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .bottom-circle {
            margin-top: -5px;
            transform: rotate(180deg);
        }

        .top-circle {
            margin-bottom: -5px;
        }

        .half-circle {
            height: 50px;
            /* Alter here for height of circle segment */
            overflow: hidden;
        }

        .half-circle>div {
            width: 400px;
            /* Alter here for circle diameter */
            height: 400px;
            /* Alter here for circle diameter */
            border: 5px double white;
            border-radius: 50%;
            background: navy;
        }

        .tournament {
            display: flex;
            flex-direction: row;
        }

        .tournament .round {
            font-size: .75em;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 200px;
            list-style: none;
            padding: 0;
        }

        .tournament .round .spacer {
            flex-grow: 2;
        }

        .tournament .round .spacer:first-child,
        .tournament .round .spacer:last-child {
            flex-grow: 1;
        }

        .first-four {
            border: 1px solid #888;
            border-radius: 1em;
            background-color: lightcyan;
            padding: 0 1em;
        }

        .tournament-header {
            text-align: center;
            font-weight: bold;
            border-radius: 1em;
            border: 1px solid black;
            background-color: #f54e00;
            color: white;
        }

        .first-four-winner li.game-left,
        .round-1 li.game-left,
        .round-2 li.game-left,
        .round-3 li.game-left,
        .round-4 li.game-left,
        .semi-final li.game-left {
            padding-left: 0.5em;
        }

        .first-four-winner li.game-right,
        .round-1 li.game-right,
        .round-2 li.game-right,
        .round-3 li.game-right,
        .round-4 li.game-right,
        .semi-final li.game-right {
            padding-right: 0.5em;
        }

        .region {
            font-size: 1.5em;
            font-weight: bold;
        }

        .region-right {
            text-align: right;
            padding-right: 5px;
        }

        .region-left {
            text-align: left;
            padding-left: 5px;
        }

        ul.seed li.game-left span:first-child,
        ul.seed li.game-right span:last-child {
            font-size: 0.5em;
        }

        li.game-right {
            text-align: right;
            border-left: 1px solid #aaa;
        }

        li.game-left {
            border-right: 1px solid #aaa;
        }

        li.game-bottom {
            border-bottom: 1px solid #aaa;
        }

        li.game-top {
            border: none;
            border-bottom: 1px solid #aaa;
        }

        li.game-left.spacer {
            border-right: 1px solid #aaa;
            min-height: 5px;
            padding-right: .25em;
        }

        li.game-right.spacer {
            border-left: 1px solid #aaa;
            min-height: 5px;
            padding-left: .25em;
            text-align: left;
        }

        .final {
            text-align: center;
            padding-top: 1em;
            padding-bottom: 1em;
            border: 1px solid #aaa;
            margin-top: 1em;
            margin-bottom: 1em;
            font-weight: bold;
        }

        .finals .centered {
            text-align: center;
            font-weight: bold;
        }

        .finals .centered>input {
            display: block;
            width: 4em;
            margin: 0 auto 0 auto;
            text-align: center;
        }

        .body-first-child {
            margin-top: -45px;
        }

        .extra-padding {
            padding-top: 45px;
        }
    </style>
</head>

<body>


    <header>

        <div class='header-text'>
            <h1>Doubles</h1>
        </div>

        </div>
        </div>
    </header>
    <section>

        <div class='tournament'>
            <!-- <ul class='round seed'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>8</span>
                    <span>Ravi</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>16</span>
                    
                </li>
                <span> M Raja</span>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>8</span>
                    <span>Wisconsin</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>9</span>
                    <span>Virginia Tech</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>5</span>
                    <span>Virginia</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>12</span>
                    <span>North Carolina - Wil&hellip;</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>4</span>
                    <span>Florida</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>13</span>
                    <span>East Tennessee State</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>6</span>
                    <span>Southern Methodist</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>11</span>
                    <span>Southern California &hellip;</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>3</span>
                    <span>Baylor</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>14</span>
                    <span>New Mexico State</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>7</span>
                    <span>South Carolina</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>10</span>
                    <span>Marquette</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>2</span>
                    <span>Duke</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>15</span>
                    <span>Troy</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>1</span>
                    <span>Gonzaga</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>16</span>
                    <span>South Dakota State</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>8</span>
                    <span>NorthWestern</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>9</span>
                    <span>Vanderbilt</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>5</span>
                    <span>Notre Dame</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>12</span>
                    <span>Princeton</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>4</span>
                    <span>West Virginia</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>13</span>
                    <span>Bucknell</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>6</span>
                    <span>Maryland</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>11</span>
                    <span>Xavier</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>3</span>
                    <span>Florida State</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>14</span>
                    <span>FLorida Gulf Coast</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>7</span>
                    <span>Saint Marys</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>10</span>
                    <span>Virginia Commonwealt&hellip;</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>
                    <span>2</span>
                    <span>Arizona</span>
                </li>
                <li class='game-left game-bottom'>
                    <span>15</span>
                    <span>North Dakota</span>
                </li>
                <li class='spacer'>&nbsp;</li>
            </ul> -->
            <!-- <ul class='round round-1'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>Ravi</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>M Raja</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>BYE</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>Sahul</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>Dr B kiran</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>Anu</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>P Subba Raju</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>Chandu</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>Shanu</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>Murali</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>Srikanth P</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>Dr Pavan</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>Dr Ravi Babu</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>Atchych Varma</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>BYE</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>Gautham</li>
                <li class='spacer'>&nbsp;</li>
            </ul> -->
            <ul class='round round-2'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>M Siva & Gajapathi</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>Bhargav & Subba Raju</li>
                <li class='spacer'>&nbsp;</li>
                <li class='spacer'>&nbsp;</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>Suresh & Murali</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>BYE</li>
                <li class='spacer'>&nbsp;</li>
                <li class='spacer'>&nbsp;</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>Srikanth & Dr Satish</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>Raghu & Anu</li>
                <li class='spacer'>&nbsp;</li>
                <li class='spacer'>&nbsp;</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>Dr Kiran & Vamsi</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>Dr Gautham & Ramesh</li>
                <li class='spacer'>&nbsp;</li>
                <li class='spacer'>&nbsp;</li>
                <li class='spacer'>&nbsp;</li>
            </ul>
            <ul class='round round-3'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>Q1</li>
                <li class='game-left spacer region region-right'></li>
                <li class='game-left game-bottom'>Suresh & Murali</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>Q3</li>
                <li class='game-left spacer region region-right'></li>
                <li class='game-left game-bottom'>Q4</li>
                <li class='spacer'>&nbsp;</li>
            </ul>
            <ul class='round round-4'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>?</li>
                <li class='game-left spacer'>&nbsp;</li>
                <li class='game-left game-bottom'>?</li>
                <li class='spacer'>&nbsp;</li>
            </ul>
            <ul class='round semi-final'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-left game-top'>?</li>
                <li class='spacer'>&nbsp;</li>
            </ul>
            <ul class='round finals'>
                <li class='spacer'>&nbsp;</li>
                <li class='game final'>Winner</li>
                <li class='spacer'>&nbsp;</li>
            </ul>
            <ul class='round semi-final'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>?</li>
                <li class='spacer'>&nbsp;</li>
            </ul>
            <ul class='round round-4'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>?</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>?</li>
                <li class='spacer'>&nbsp;</li>
            </ul>
            <ul class='round round-3'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>Q5</li>
                <li class='game-right spacer region region-left'></li>
                <li class='game-right game-bottom'>Q6</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>Q7</li>
                <li class='game-right spacer region region-left'></li>
                <li class='game-right game-bottom'>Q8</li>
                <li class='spacer'>&nbsp;</li>
            </ul>
            <ul class='round round-2'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>Janiki & Ravi</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>Dr Ravi Babu & Chandu</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>Sahul & Atchuth Varma</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>Sajeev & Subhash</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>Dr Pavan & Gopi</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>Shanu & Dr Uday</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>KTC kiran & Vijay Babu</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>KSN & Rama Krishna</li>
                <li class='spacer'>&nbsp;</li>
            </ul>
            <!-- <ul class='round round-1'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>M Siva</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>Bhargav Kumar</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>Royal</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>Sajeev</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>BYE</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>KSN</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>BYE</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>Ramesh</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>Dr Satish</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>Dr Uday</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>BYE</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>Vamsi</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>BYE</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>Rama Krishna jr</li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>Janiki Rama Raju</li>
                <li class='game-right spacer'>&nbsp;</li>
                <li class='game-right game-bottom'>RamaKrishna</li>
                <li class='spacer'>&nbsp;</li>
            </ul> -->
            <!-- <ul class='round seed'>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Kansas</span>
                    <span>1</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>UC Davis / North Car&hellip;</span>
                    <span>16</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Miami</span>
                    <span>8</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Michigan State</span>
                    <span>9</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Iowa State</span>
                    <span>5</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Nevada</span>
                    <span>12</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Purdue</span>
                    <span>4</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Vermont</span>
                    <span>13</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Creighton</span>
                    <span>6</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Rhode Island</span>
                    <span>11</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Oregon</span>
                    <span>3</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Iona</span>
                    <span>14</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Michigan</span>
                    <span>7</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Oklahoma State</span>
                    <span>10</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Louisville</span>
                    <span>2</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Jacksonville State</span>
                    <span>15</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>North Carolina</span>
                    <span>1</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Texas Southern</span>
                    <span>16</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Arkansas</span>
                    <span>8</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Seton Hall</span>
                    <span>9</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Minnesota</span>
                    <span>5</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Middle Tennessee Sta&hellip;</span>
                    <span>12</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Butler</span>
                    <span>4</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Winthrop</span>
                    <span>13</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Cincinnati</span>
                    <span>6</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Wake Forest / Kansas&hellip;</span>
                    <span>11</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>UCLA</span>
                    <span>3</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Kent State</span>
                    <span>14</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Dayton</span>
                    <span>7</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Wichita State</span>
                    <span>10</span>
                </li>
                <li class='spacer'>&nbsp;</li>
                <li class='game-right game-top'>
                    <span>Kentucky</span>
                    <span>2</span>
                </li>
                <li class='game-right game-bottom'>
                    <span>Northern Kentucky</span>
                    <span>15</span>
                </li>
                <li class='spacer'>&nbsp;</li>
            </ul> -->
        </div>
    </section>

</body>

</html>