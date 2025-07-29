# Module 11A - Weather Forecast

## Project Overview
This Laravel app simulates an API-style weather response by loading data from a static JSON file. The controller reads the file, decodes the contents, and passes the result to a Blade view. The view displays the weather in a styled HTML table using condition-based icons.

## Setup Instructions

1. Clone the repository or download the project folder.

2. Navigate into the project directory:

   ```bash
   cd module11a-apidata

3. Install dependencies:

Bash
composer install

4.  Serve the app locally:

bash
php artisan serve

5. Visit the /weather route in your browser:

http://127.0.0.1:8000/weather


File Structure
storage/app/weather.json: contains weather data for 3 sample days

app/Http/Controllers/WeatherController.php: controller logic for loading JSON

routes/web.php: route that maps /weather to the controller

resources/views/weather/index.blade.php: Blade view that renders the forecast table

Features
Loads and decodes local JSON data with file_get_contents and json_decode

Displays day, high/low temperatures, and weather condition

Shows weather condition icons dynamically using Blade conditionals

Basic table styling with inline HTML/CSS

Screenshot:

<img width="1852" height="996" alt="image" src="https://github.com/user-attachments/assets/d52bb002-adce-442d-9b98-35f3c89e0635" />
