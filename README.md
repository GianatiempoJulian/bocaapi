
# Boca Juniors API

[![GitHub release (latest by date including pre-releases)](https://img.shields.io/github/v/release/navendu-pottekkat/awesome-readme?include_prereleases)](https://img.shields.io/github/v/release/navendu-pottekkat/awesome-readme?include_prereleases)
[![GitHub pull requests](https://img.shields.io/github/issues-pr/navendu-pottekkat/awesome-readme)](https://img.shields.io/github/issues-pr/navendu-pottekkat/awesome-readme)
[![GitHub](https://img.shields.io/github/license/navendu-pottekkat/awesome-readme)](https://img.shields.io/github/license/navendu-pottekkat/awesome-readme)

The **Boca Juniors API** is a RESTful API designed for developers and HINCHAS. It provides detailed information about **Club Atlético Boca Juniors**, including matches, tournaments, players, etc. <br> It was created to power my **front-end project**, where users can register the matches they attended live at the stadium and track their unforgettable experiences at the stadiums.


# Table of Contents

- [Installation](#installation)  
- [Usage](#usage)  
- [Development](#development)  
- [Contribute](#contribute)  
- [License](#license)  


# Installation
[(Back to top)](#table-of-contents)

1. Clone the repository:  
```shell
git clone https://github.com/your-username/boca-juniors-api.git
```

2. Navigate to the project folder:
```shell
cd boca-juniors-api
```

3. Install dependencies:
```shell
composer install
```

4. Set up the environment file and update the .env file with your database credentials and other settings:
```shell
cp .env.example .env
```

5. Run database migrations:
```shell
php artisan migrate
```

6. Start the development server:
```shell
php artisan serve
```




# Usage
[(Back to top)](#table-of-contents)

*api/seasons* - Retrieve all seasons data.
<br>
*api/competitions* - Retrieve all competitions data.
<br>
*api/teams* - Retrieve all rivals teams data.
<br>
*api/stadia* - Retrieve all stadiums data.
<br>
*api/games* - Retrieve all games data.
<br>
*api/players* - Retrieve all players data.


# Development
[(Back to top)](#table-of-contents)

Follow these steps to set up a development environment:

1. Fork the repository. <br>
2. Clone your forked repository locally:

```shell
git clone https://github.com/your-username/boca-juniors-api.git
```
3. Create a new branch for your feature or bugfix:

```shell
git checkout -b feature/your-feature-name
```

4. Make your changes, then commit and push:

```shell
git add .
git commit -m "Add your message here"
git push origin feature/your-feature-name
```

5. Open a pull request in the main repository.


# Contribute
[(Back to top)](#table-of-contents)

Contributions are welcome! Feel free to open issues or submit pull requests for enhancements or bug fixes.


# License
[(Back to top)](#table-of-contents)

This project is licensed under the MIT License.






