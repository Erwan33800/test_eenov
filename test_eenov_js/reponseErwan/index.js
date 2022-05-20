const jsonData = require('../input.json');

// j'attribu une const à chaque objet pour les manipuler plus facilement
const loyaltyCards = jsonData.loyalty_cards;
const rewards = jsonData.rewards;

const myArgs = process.argv.slice(2); // sert à ne pas prendre en compte les 2 premières lignes de process.argv qui ne sont pas utiles pour nous

const userId = parseInt(myArgs[0]);
const LCId = parseInt(myArgs[1]);
var points;
var pointsByLCByUser;
var pointsByLCid;
var nameLC;


rewards.forEach(e => {
    if (e.user_id === userId){

        // récupération des datas d'un user spécifique
        const filteredUser = rewards.filter(obj => obj.user_id === userId);

        // sommes des points de toutes ses LC
        points = filteredUser.map(item => item.points).reduce((prev, curr) => prev + curr, 0);

        // détermine les LC communes à un user
        filteredUser.forEach(i => {
            if(i.loyalty_card_id === i.loyalty_card_id) {
                const filteredLoyaltyCardByUser = filteredUser.filter(obj => obj.loyalty_card_id)
                console.log(filteredLoyaltyCardByUser)

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

console.log("tets " + pointsByLCByUser)

const resultat = {
    "user": {
        "id" : userId,
        "total_points": points,
        "loyalty_cards": "loyaltyCardsObject"        
    },
    "loyalty_card" : {
        "id": LCId,
        "name": nameLC,
        "total_points": pointsByLCid
    }

}

console.log('Vous avez choisi l\'utilisateur :  ' + userId + " ainsi que la carte de fidélité numéro : " + LCId);
console.log(resultat);