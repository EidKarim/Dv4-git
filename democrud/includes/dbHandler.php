<?php

class DbHandler
{
    // De verbinding naar de juiste database en host
    private $dataSource = "mysql:dbname=snakegame;host=localhost;";

    // De login gegevens voor je database
    private $userName = "root";
    private $password = "";

    public function SelecteerGebruikers()
    {
        // PDO is het object waarmee we een verbinding naar de database hebben
        $pdo = new PDO($this->dataSource, $this->userName, $this->password);

        // Prepare maakt een query waar we eventueel parameters aan toe kunnen voegen.
        $statement = $pdo->prepare("SELECT * FROM inloggevens");

        // Execute voert de query uit
        $statement->execute();

        // Fetch haalt de informatie op uit het resultaat van de query, in dit geval is dat een associatieve array
        // Vandaar Fetch_Assoc
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function MaakGebruiker(string $naam, string $username, string $email, string $password){
        $pdo = new PDO($this->dataSource, $this->userName, $this->password);

        // :naam en dergelijke zijn Parameters, door de bindParam worden deze vervangen met onze variabelen.
        // Let op dat je altijd evenvaak bindParam doe als de hoeveelheid parameters in je query anders krijg je errors
        // Bij bindParam dien je ook het juiste type op te geven van de parameter.
        $statement = $pdo->prepare("INSERT INTO inloggevens(name,email,password,username) VALUES(:name, :email, :username, :password )");
        $statement->bindParam("name", $naam, PDO::PARAM_STR);
        $statement->bindParam("username", $username, PDO::PARAM_STR);
        $statement->bindParam("email", $email, PDO::PARAM_STR);
        $statement->bindParam("password", $password, PDO::PARAM_STR);
        $statement->execute();
    }
}
