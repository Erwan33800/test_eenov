const jsonData = require('../input.json');

// j'attribu une const à chaque objet pour les manipuler plus facilement
const loyaltyCards = jsonData.loyalty_cards;
const rewards = jsonData.rewards;

// process.argv va nous permettre de passer des arguments via la ligne de commande
const myArgs = process.argv.slice(2); // sert à ne pas prendre en compte les 2 premières lignes de process.argv qui ne sont pas utiles pour nous

const userId = parseInt(myArgs[0]);
const LCId = parseInt(myArgs[1]);
var points;
var pointsByLCByUser;
var pointsByLCid;
var nameLC;
var loyaltyCardsObject = {};

if (LCId > 5 && userId > 6) {
    console.log("Erreur. Veuillez choisir une carte de fidélité parmis les suivantes : 1 = Carrefour; 2 = Leclerc; 3 = Macdo; 4 = Fnac; 5 = Subway ainsi qu'un utilisateur entre 1 et 6")
} else {
    rewards.forEach(e => {
        if (e.user_id === userId){
    
            // récupération des datas d'un user spécifique
            var filteredUser = rewards.filter(obj => obj.user_id === userId);
    
            // sommes des points de toutes ses LC
            points = filteredUser.map(item => item.points).reduce((prev, curr) => prev + curr, 0);
    
            // détermine les LC communes à un user
            filteredUser.forEach(i => {
                if(i.loyalty_card_id === i.loyalty_card_id) {
                    const filteredLoyaltyCardByUser = filteredUser.filter(obj => obj.loyalty_card_id === i.loyalty_card_id);
                    pointsByLCByUser = filteredLoyaltyCardByUser.map(item => item.points).reduce((prev, curr) => prev + curr, 0);
                    // console.log("nb de points du user " + userId + " de la Lc de " + i.loyalty_card_id + " : " + pointsByLCByUser)
                    if (i.loyalty_card_id === 1) {
                        var nameLC = "Carrefour"
                    }
                    if (i.loyalty_card_id === 2) {
                        var nameLC = "Leclerc"
                    }
                    if (i.loyalty_card_id === 3) {
                        var nameLC = "Macdo"
                    }
                    if (i.loyalty_card_id === 4) {
                        var nameLC = "Fnac"
                    }
                    if (i.loyalty_card_id === 5) {
                        var nameLC = "Subway"
                    }
    
                    loyaltyCardsObject = {
                        "id" : i.loyalty_card_id,
                        "total_points" : pointsByLCByUser,
                        "name" : nameLC
        
                    }
                    console.log(loyaltyCardsObject)
                }
            })
        }
        const filteredLoyaltyCards = rewards.filter(obj => obj.loyalty_card_id === LCId);
        pointsByLCid = filteredLoyaltyCards.map(item => item.points).reduce((prev, curr) => prev + curr, 0);
    })
    
    loyaltyCards.forEach(e => {
        if(e.id === LCId ){
            nameLC = e.name
        }
    })
    
    const resultat = {
        "user": {
            "id" : userId,
            "total_points": points,
            "loyalty_cards": loyaltyCardsObject
        },
        "loyalty_card" : {
            "id": LCId,
            "name": nameLC,
            "total_points": pointsByLCid
        }
    
    }
    
    console.log('Vous avez choisi l\'utilisateur :  ' + userId + " ainsi que la carte de fidélité numéro : " + LCId);
    console.log(resultat);
}
