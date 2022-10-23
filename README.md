# TestApp

Small app with multiple tests

<h1 class="text-center">Random tests</h1>
<h3>1. Prime Numbers</h3>
<p>Script that prints all integer values from 1 to 100.<br>
    Beside each number, is printed a list of multiple numbers (inside brackets and comma-separated).<br>
    If only multiple of itself then is printed “[PRIME]”.<br>
</p>
<h3>2. ASCII Array</h3>
<p>Script that generates a random array containing all the ASCII characters from comma (“,”) to pipe
    (“|”).<br>
    Then randomly was removed and discarded an arbitrary element from this newly generated array.<br>
    Show the missing character.</p>
<h3>3. TV Series</h3>
<p>MySQL database with data from at least 3 TV Series using the following structure:<br>
    tv_series -> (id, title, channel, gender);<br>
    tv_series_intervals -> (id_tv_series, week_day, show_time);<br>
    Migrations and seeders included;<br>
    Script that tells when the next TV Series will air based on the current time-date<br>
    Script that tells when the next TV Series will air based on an inputted time-date</p>
<h3>4. A/B Testing</h3>
<p>Script that shows redirects end users to the different designs based on the data provided by a library

<h2>Setup</h2>
<ul>
<li>git clone https://github.com/miguelabfonseca/TestApp.git</li>
<li>composer install</li>
<li>create your .env configuration file and database</li>
<li>php artisan key:generate</li>
<li>php artisan migrate</li>
<li>php artisan db:seed --class=TVSeriesSeeder</li>
<li>php artisan db:seed --class=TVSeriesIntervalsSeeder</li>
<li>php artisan storage:link</li>
</ul>
