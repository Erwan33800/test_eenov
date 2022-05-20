
const userId = rewards[0].user_id
const loyaltyCardId = loyaltyCards[0].id

// Je filtre dans l'objet rewards chaque utilisateurs en fonction de leur id
const filteredUser = rewards.filter(obj => obj.user_id === userId);
const points = filteredUser.map(item => item.points).reduce((prev, curr) => prev + curr, 0);

// Je filtre pour avoir toutes les loyalty cards d'un utilisateur
const filteredLoyaltyCardByUser = filteredUser.filter(obj => obj.loyalty_card_id === 3)
const pointsFilteredLoyaltyCardByUser = filteredLoyaltyCardByUser.map(item => item.points).reduce((prev, curr) => prev + curr, 0);

// Je filtre dans l'objet rewards chaque loyalty card en fonction de leur id
const filteredLoyaltyCards = rewards.filter(obj => obj.user_id === rewards.loyalty_card_id);

// j'additionne les points du filtrage en haut
const pointsFilteredLoyaltyCards = filteredLoyaltyCards.map(item => item.points).reduce((prev, curr) => prev + curr, 0);
console.log(filteredLoyaltyCards)
// donnée des loyalty card d'un utilisateur
const loyaltyCardsObject = {
    "id": loyaltyCardId,
    "points": pointsFilteredLoyaltyCardByUser,
    "name": rewards[0].loyalty_card_id,
}


const resultat = {
    "user": {
        "id" : userId,
        "total_points": points,
        "loyalty_cards": loyaltyCardsObject        
    },
    "loyalty_card" : {
        "id": loyaltyCards[0].id,
        "name": loyaltyCards[0].name,
        "total_points": pointsFilteredLoyaltyCards
    }

}


console.log(resultat)