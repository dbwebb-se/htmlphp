<?php
/**
 * Commonly used functions.
 */

/**
 * Open a connection to a database and return its handler.
 *
 * @param string $dsn the data source name.
 *
 * @throws PDOException when connection fails.
 *
 * @return object as database connection.
 */
function connectToDatabase(string $dsn) : object
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }

    return $db;
}



function getHTMLForCourseResultset(array $res) : string
{
    $rows = "";
    foreach ($res as $row) {
        $linkToUpdate = "<a href=\"update.php?code={$row["code"]}\">Uppdatera</a>";
        $linkToDelete = "<a href=\"delete.php?code={$row["code"]}\">Delete</a>";
        $linkToDelete2 = "<a href=\"delete2.php?code={$row["code"]}\">Delete2</a>";

        $rows .= "<tr>";
        $rows .= "<td><a href=\"update.php?code={$row["code"]}\">{$row["code"]}</a></td>";
        $rows .= "<td>{$row["name"]}</td>";
        $rows .= "<td>{$row["points"]}</td>";
        $rows .= "<td>{$row["term"]}</td>";
        $rows .= "<td>{$row["kmom"]}</td>";
        $rows .= "<td>{$row["done"]}</td>";
        $rows .= "<td>{$linkToUpdate} {$linkToDelete} {$linkToDelete2}</td>";
        $rows .= "<tr>";
    }

    $html = <<<EOD
<table>
    <tr>
        <th>Kod</th>
        <th>Namn</th>
        <th>Poäng</th>
        <th>Termin</th>
        <th>Kmom</th>
        <th>Klar</th>
        <th>Actions</th>
    </tr>
    $rows
</table>
EOD;

    return $html;
}
