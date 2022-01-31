<?php



/**
 * Convertit l'affichage d'un prix au format français
 * exemple: 12 => 12,00
 * 
 * @param float $price
 * @return float
 */
function withoutVAT(float $price): float
{
    // equivalent à $prixe / 1.2
    return $price / (1 + (20 / 100));
}

function formatPrice(float $price): string
{
    return number_format($price, 2, ',', '');
}

/**
 * Affiche une ligne (table HTML) d'un tableau de bonnets
 * 
 * @param int $id Identifiant (clé) du bonnet
 * @param array $beanie Les informations d'un bonnet
 */

function displayBeanieLine(int $id, array $beanie): void
{
    $color = 'blue';
    if ($beanie['price'] <= 12.0) {
        $color = 'green';
    }
?>
    <tr>
        <td>
            <?= $id; ?>
        </td>
        <td>
            <?= $beanie['name']; ?>
        </td>
        <td style="color: <?= $color;  ?>;">
            <?= formatPrice(withoutVAT($beanie['price'])); ?>€
        </td>
        <td style="color: <?= $color;  ?>;">
            <?= formatPrice($beanie['price']); ?>€
        </td>
        <td>
            <?= $beanie['description']; ?>
        </td>
    </tr>


<?php
}
?>