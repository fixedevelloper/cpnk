var galaxyMining = {
    account: null,
    contract: null,
    userAccount: null,
    secondContract: null,

    connectContract: async function () {
        const ABI = [{ "inputs": [{ "internalType": "address", "name": "admin", "type": "address" }, { "internalType": "address", "name": "ADContract", "type": "address" }, { "internalType": "uint256", "name": "Vpercent", "type": "uint256" }, { "internalType": "uint256", "name": "ForHold", "type": "uint256" }], "stateMutability": "nonpayable", "type": "constructor" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "previousOwner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "newOwner", "type": "address" }], "name": "OwnershipTransferred", "type": "event" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "A", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "Admin", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "UserToUpgrade", "type": "address" }, { "internalType": "uint256", "name": "LevelToBuy", "type": "uint256" }], "name": "BuyLevel", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "UserToUpgrade", "type": "address" }, { "internalType": "uint256", "name": "LevelToBuy", "type": "uint256" }], "name": "BuyLevelByOwner", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "UserToCheck", "type": "address" }], "name": "CheckUserLastUpdate", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "Claim_DIV", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "G56Matrix", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "USER", "type": "address" }], "name": "GetDivPerSec", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address payable", "name": "_To", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "HoldFunds", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address payable", "name": "_To", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "HoldFundsbyAdmin", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "LastUpdate", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "Level10Income", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "NumberOfUsers", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "newRate", "type": "uint256" }], "name": "SetRate", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "newpercent", "type": "uint256" }], "name": "SetVirtualPercentage", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "NewAddress", "type": "address" }], "name": "SetWeeklyAddress", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "TotalIncome", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "UserTo", "type": "address" }], "name": "UpdateLastUpdate", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "UplineEarnings", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "UserID", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "Users", "outputs": [{ "internalType": "uint256", "name": "id", "type": "uint256" }, { "internalType": "address", "name": "userAddress", "type": "address" }, { "internalType": "address", "name": "referrer", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "VirtualDownline", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "VirtualParent", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "WeeklyContract", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "_owner", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "availableDiv", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "user", "type": "address" }], "name": "calculateDiv", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "checkUpdate", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "directIncome", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "directIncomefrom10", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "directPartnersCount", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "divPerSecInEther", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "freeIncome", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "user", "type": "address" }], "name": "getDirectPartners", "outputs": [{ "internalType": "address[]", "name": "", "type": "address[]" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "getLastLevelBuyer", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "getLastRegistration", "outputs": [{ "internalType": "uint256", "name": "userID", "type": "uint256" }, { "internalType": "address", "name": "referrer", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "user", "type": "address" }], "name": "getTotalTeamSize", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "user", "type": "address" }], "name": "getTotalVirtualTeamSize", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "user", "type": "address" }, { "internalType": "uint256", "name": "level", "type": "uint256" }], "name": "hasLevel", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_referrer", "type": "address" }, { "internalType": "uint256", "name": "_requiredLevel", "type": "uint256" }], "name": "hasRequiredLevel", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "name": "idToAddress", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "isAdmin", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "isOwner", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "isRegistered", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "l", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "lastDivClaimed", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "lastLevelBuyer", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "lastUserID", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "name": "levelPrices", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "randomUser", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "referrers", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "UserToRegister", "type": "address" }, { "internalType": "address", "name": "referrerAddress", "type": "address" }], "name": "registerUser", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "UserToRegister", "type": "address" }, { "internalType": "address", "name": "referrerAddress", "type": "address" }], "name": "registerUserByOwner", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "registrationFees", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "renounceOwnership", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "newAdmin", "type": "address" }], "name": "setAdmin", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "newOwner", "type": "address" }], "name": "setOwner", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "newfees", "type": "uint256" }], "name": "setholdingFees", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "totalDivClaimed", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "totalInevest", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "totalLevels", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "newOwner", "type": "address" }], "name": "transferOwnership", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "USERTO", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "updateDivPerSecByOWner", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }, { "internalType": "uint256", "name": "", "type": "uint256" }], "name": "userPartners", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }, { "internalType": "uint256", "name": "", "type": "uint256" }], "name": "userVirtualPartners", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "virtualReward", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "stateMutability": "payable", "type": "receive" }];

        const Address = "0x597b599d2D197C49456b1C20Aae2C4BF1576396d";


        try {
            window.web3 = new Web3(window.ethereum);
            await window.ethereum.request({ method: 'eth_requestAccounts' });
            this.account = (await web3.eth.getAccounts())[0];
            this.contract = new web3.eth.Contract(ABI, Address);
            console.log("Connected to smart contract");
        } catch (error) {
            console.error("Error connecting to contract: ", error);
        }
    },

    connectSecondContract: async function () {


        const SecContractABI =[{"inputs":[{"internalType":"address","name":"admin","type":"address"},{"internalType":"address","name":"ADContract","type":"address"},{"internalType":"uint256","name":"Vpercent","type":"uint256"},{"internalType":"uint256","name":"ForHold","type":"uint256"},{"internalType":"address","name":"_existingContractAddress","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"A","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"Admin","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"UserToUpgrade","type":"address"},{"internalType":"uint256","name":"LevelToBuy","type":"uint256"}],"name":"BuyLevel","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"address","name":"UserToUpgrade","type":"address"},{"internalType":"uint256","name":"LevelToBuy","type":"uint256"}],"name":"BuyLevelByOwner","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"UserToCheck","type":"address"}],"name":"CheckUserLastUpdate","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"Check_IsUPdate","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"Claim_DIV","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"G56Matrix","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"USER","type":"address"}],"name":"GetDivPerSec","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address payable","name":"_To","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"HoldFunds","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address payable","name":"_To","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"HoldFundsbyAdmin","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"IsUpdate","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"LastUpdate","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"Level10Income","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"NumberOfUsers","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"newRate","type":"uint256"}],"name":"SetRate","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"newpercent","type":"uint256"}],"name":"SetVirtualPercentage","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"NewAddress","type":"address"}],"name":"SetWeeklyAddress","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"UserTo","type":"address"}],"name":"UpdateLastUpdate","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"UplineEarnings","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"UserID","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"VirtualParent","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"WeeklyContract","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"_owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"availableDiv","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"calculateDiv","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"checkUpdate","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"directIncomefrom10","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"directPartnersCount","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"divPerSecInEther","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"existingContract","outputs":[{"internalType":"contract IExistingContract","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"freeIncome","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getLastLevelBuyer","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getRefferers","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getVirtualParent","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"},{"internalType":"uint256","name":"level","type":"uint256"}],"name":"hasLevel","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_referrer","type":"address"},{"internalType":"uint256","name":"_requiredLevel","type":"uint256"}],"name":"hasRequiredLevel","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"idToAddress","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"isAdmin","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"isOwner","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"isRegistered","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"l","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"lastDivClaimed","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"lastLevelBuyer","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"lastUserID","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"levelPrices","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"pauseSystem","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"randomUser","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"referrers","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"registrationFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newAdmin","type":"address"}],"name":"setAdmin","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"setOwner","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"newfees","type":"uint256"}],"name":"setholdingFees","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"systemPause","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"totalDivClaimed","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalInevest","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalLevels","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"unpauseSystem","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"USERTO","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"updateDivPerSecByOWner","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"},{"internalType":"uint256","name":"","type":"uint256"}],"name":"userPartners","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"},{"internalType":"uint256","name":"","type":"uint256"}],"name":"userVirtualPartners","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"virtualReward","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"stateMutability":"payable","type":"receive"}]




        const SecContractAddress = "0x888d423eFE72b6D31D89fa2e7f6c073802EE56E2";

        try {
            this.secondContract = new web3.eth.Contract(SecContractABI, SecContractAddress);
            console.log("Connected to second smart contract");
        } catch (error) {
            console.error("Error connecting to second contract: ", error);
        }
    },

    getUserAddressAndSendToServer: async function (userAddress) {
        if (window.ethereum) {
            try {
                const accounts = await window.ethereum.request({ method: 'eth_requestAccounts' });
                const userAccount = accounts[0];


                fetch('dividendes.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `address=${userAccount}`
                })
                    .then(response => response.text())
                    .then(data => console.log(data))
                    .catch((error) => {
                        console.error('Error:', error);
                    });

            } catch (error) {
                console.error("Error retrieving accounts:", error);
            }
        } else {
            console.log("Ethereum object not found. You need to install MetaMask!");
        }
    },

    // Appel de la fonction lors de la connexion de l'utilisateur


    getUserIdByAddress: async function (userAddress) {
        const numberOfUsers = await this.contract.methods.NumberOfUsers().call();
        console.log("Nombre total d'utilisateurs:", numberOfUsers);

        for (let userId = 1; userId <= numberOfUsers; userId++) {
            try {
                const address = await this.contract.methods.idToAddress(userId).call();
                console.log("Vérification de l'adresse pour l'ID", userId, ":", address);
                if (address.toLowerCase() === userAddress.toLowerCase()) {
                    console.log("ID trouvé:", userId);
                    return userId;
                }
            } catch (error) {
                console.error("Erreur lors de la récupération de l'adresse pour l'ID", userId, ":", error);
            }
        }

        console.log("Aucun ID trouvé pour l'adresse:", userAddress);
        return null;
    },

    getUserLevel: async function (userAddress) {
        if (!userAddress) {
            console.log("User address is undefined.");
            return;
        }
        try {

            const activeLevels = await this.contract.methods.G56Matrix(userAddress).call();
            console.log("Niveaux actifs pour l'utilisateur:", activeLevels);
            return activeLevels;
        } catch (error) {
            console.error("Erreur lors de la récupération des niveaux actifs:", error);
        }

    },


    updateProgramLevels: async function (userAddress) {
        if (!userAddress) {
            console.log("User address is undefined.");
            return;
        }


        try {

            const activeLevels = await this.contract.methods.G56Matrix(this.userAccount).call();

            // Sélectionner tous les carrés
            const squares = document.querySelectorAll('.square');

            // Mettre à jour la couleur des carrés en fonction du nombre de niveaux actifs
            squares.forEach((square, index) => {
                if (index < activeLevels) {
                    // Niveau actif
                    square.classList.add('active');
                    square.classList.remove('inactive');
                } else {
                    // Niveau inactif
                    square.classList.add('inactive');
                    square.classList.remove('active');
                }
            });
        } catch (error) {
            console.error("Erreur lors de la récupération des niveaux actifs:", error);
        }
    },



// Fonction pour récupérer le freeIncome du premier contrat
    getFreeIncomeFromFirstContract: async function () {
        try {
            return await this.contract.methods.freeIncome(this.userAccount).call();
        } catch (error) {
            console.error("Error fetching free income from first contract:", error);
            return "0";  // Retourne 0 en cas d'erreur
        }
    },

// Fonction pour récupérer le freeIncome du second contrat
    getFreeIncomeFromSecondContract: async function () {
        try {
            return await this.secondContract.methods.freeIncome(this.userAccount).call();
        } catch (error) {
            console.error("Error fetching free income from second contract:", error);
            return "0";  // Retourne 0 en cas d'erreur
        }
    },

// Fonction principale pour récupérer et additionner le freeIncome des deux contrats
    getFreeIncome: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            const [freeIncomeWeiFirst, freeIncomeWeiSecond] = await Promise.all([
                this.getFreeIncomeFromFirstContract(),
                this.getFreeIncomeFromSecondContract()
            ]);

            const totalAmount = BigInt(freeIncomeWeiFirst) + BigInt(freeIncomeWeiSecond);
            const freeIncomeBNB = web3.utils.fromWei(totalAmount.toString(), 'ether');
            this.updateFreeIncomeUI(freeIncomeBNB);
        } catch (error) {
            console.error("Error fetching free income:", error);
        }
    },

// Mettre à jour l'UI avec le freeIncome combiné
    updateFreeIncomeUI: function (freeIncomeBNB) {
        const freeIncomeElement = document.getElementById('freeincome');
        if (freeIncomeElement) {
            freeIncomeElement.textContent = `${parseFloat(freeIncomeBNB).toFixed(5)} BNB`;
        } else {
            console.error("Element 'freeincome' not found in the DOM.");
        }
    },

    Updatelevels: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            // Obtenez les niveaux du PrimaryContract
            const primaryLevels = await this.contract.methods.G56Matrix(this.userAccount).call();
            let totalActiveLevels = primaryLevels > 2 ? 2 : primaryLevels; // Limite à 2 niveaux pour PrimaryContract

            // Obtenez les niveaux du SecContract
            const secLevels = await this.secondContract.methods.G56Matrix(this.userAccount).call();
            if (secLevels > 0) {
                totalActiveLevels = secLevels; // Utiliser les niveaux du secondContract si > 0
            }

            // Mise à jour des carrés
            const squares = document.querySelectorAll('.square');
            squares.forEach((square, index) => {
                if (index < totalActiveLevels) {
                    square.classList.add('active');
                    square.classList.remove('inactive');
                } else {
                    square.classList.add('inactive');
                    square.classList.remove('active');
                }
            });
        } catch (error) {
            console.error("Erreur lors de la récupération des niveaux actifs:", error);
        }
    },

    level: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            // Niveaux du PrimaryContract
            const primaryLevels = await this.contract.methods.G56Matrix(this.userAccount).call();
            let totalActiveLevels = primaryLevels > 2 ? 2 : primaryLevels; // Limite à 2 niveaux pour PrimaryContract

            // Niveaux du SecContract
            const secLevels = await this.secondContract.methods.G56Matrix(this.userAccount).call();
            if (secLevels > 0) {
                totalActiveLevels = secLevels; // Utiliser les niveaux du SecContract si > 0
            }


            // Mise à jour de l'affichage des niveaux
            const levelsCountElement = document.getElementById('levels');
            if (levelsCountElement) {
                levelsCountElement.textContent = totalActiveLevels.toString();
            } else {
                console.error("Element 'levels' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching partners count:", error);
            if (document.getElementById('levels')) {
                document.getElementById('levels').textContent = "0";
            }
        }
    },




    calculateTeamProfit: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            const directIncomeWei = await this.contract.methods.directIncome(this.userAccount).call();
            const directIncomeFrom10Wei = await this.contract.methods.directIncomefrom10(this.userAccount).call();
            const level10IncomeWei = await this.contract.methods.Level10Income(this.userAccount).call();
            const ReferrerEarnings = await this.secondContract.methods.Level10Income(this.userAccount).call();
            const Virtual = await this.secondContract.methods.directIncomefrom10(this.userAccount).call();

            const totalIncomeWei = BigInt(directIncomeWei) + BigInt(directIncomeFrom10Wei) + BigInt(level10IncomeWei)   + BigInt(ReferrerEarnings)  + BigInt(Virtual);
            // Convertir Wei en BNB et formater avec 5 chiffres après la virgule
            const totalIncomeBNB = Number(totalIncomeWei) / 1e18;

            // Mettre à jour l'affichage
            const profitElement = document.getElementById('teamProfit');
            if (profitElement) {
                profitElement.textContent = `${totalIncomeBNB.toFixed(3)} BNB`;
            } else {
                console.error("Element 'teamProfit' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching team profit:", error);
        }
    },

    calculateDivClaimed: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            const divClaimedwei = await this.contract.methods.totalDivClaimed(this.userAccount).call();
            const divClaimedSec = await this.secondContract.methods.totalDivClaimed(this.userAccount).call();
            const totalClaimed = BigInt(divClaimedwei) + BigInt(divClaimedSec);

            const divClaimedbnb = Number(totalClaimed) / 1e18;


            const profitElement = document.getElementById('divclaimed');
            if (profitElement) {
                profitElement.textContent = `${divClaimedbnb.toFixed(6)} BNB`;

            } else {
                console.error("Element 'divclaimed' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching divclaimed", error);
        }
    },


    calculateTotalProfits: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            const directIncomeWei = await this.contract.methods.directIncome(this.userAccount).call();
            const directIncomeFrom10Wei = await this.contract.methods.directIncomefrom10(this.userAccount).call();
            const level10IncomeWei = await this.contract.methods.Level10Income(this.userAccount).call();
            const totalDivIncome = await this.contract.methods.totalDivClaimed(this.userAccount).call();
            const totalFreeIncome = await this.contract.methods.freeIncome(this.userAccount).call();
            const totalVirtualEarnings = await this.contract.methods.virtualReward(this.userAccount).call();
            const ReferrerEarnings = await this.secondContract.methods.Level10Income(this.userAccount).call();
            const Virtual = await this.secondContract.methods.directIncomefrom10(this.userAccount).call();
            const divClaimedSec = await this.secondContract.methods.totalDivClaimed(this.userAccount).call();
            const secFreeIncome = await this.secondContract.methods.freeIncome(this.userAccount).call();


            const totalIncomeWei = BigInt(directIncomeWei) + BigInt(directIncomeFrom10Wei) + BigInt(level10IncomeWei) + BigInt(totalDivIncome) + BigInt(totalFreeIncome) + BigInt(totalVirtualEarnings) + BigInt(ReferrerEarnings) + BigInt(Virtual)  + BigInt(divClaimedSec) + BigInt (secFreeIncome) ;

            const totalIncomeBNB = Number(totalIncomeWei) / 1e18;


            const profitElement = document.getElementById('totalearnings');
            if (profitElement) {
                profitElement.textContent = `${totalIncomeBNB.toFixed(3)} BNB`;
            } else {
                console.error("Element 'totalearnings' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching team profit:", error);
        }
    },


    calculateTotalProfitsFor: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            const directIncomeWei = await this.contract.methods.directIncome(this.userAccount).call();
            const directIncomeFrom10Wei = await this.contract.methods.directIncomefrom10(this.userAccount).call();
            const level10IncomeWei = await this.contract.methods.Level10Income(this.userAccount).call();
            const totalDivIncome = await this.contract.methods.totalDivClaimed(this.userAccount).call();
            const totalFreeIncome = await this.contract.methods.freeIncome(this.userAccount).call();
            const totalVirtualEarnings = await this.contract.methods.virtualReward(this.userAccount).call();
            const ReferrerEarnings = await this.secondContract.methods.Level10Income(this.userAccount).call();
            const Virtual = await this.secondContract.methods.directIncomefrom10(this.userAccount).call();
            const divClaimedSec = await this.secondContract.methods.totalDivClaimed(this.userAccount).call();
            const secFreeIncome = await this.secondContract.methods.freeIncome(this.userAccount).call();

            const totalIncomeWei = BigInt(directIncomeWei) + BigInt(directIncomeFrom10Wei) + BigInt(level10IncomeWei) + BigInt(totalDivIncome) + BigInt(totalFreeIncome) + BigInt(totalVirtualEarnings) + BigInt(ReferrerEarnings) + BigInt(Virtual)  + BigInt(divClaimedSec) + BigInt (secFreeIncome) ;

            // Convertir Wei en BNB et formater avec 5 chiffres après la virgule
            const totalIncomeBNB = Number(totalIncomeWei) / 1e18;

            const bnbToUsdRate = await this.getBnbToUsdRate();
            const totalIncomeUSD = totalIncomeBNB * bnbToUsdRate;

            const profitElement = document.getElementById('BNB');
            if (profitElement) {
                profitElement.textContent = `${totalIncomeUSD.toFixed(2)} USD`;
            } else {
                console.error("Element 'BNB' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching team profit:", error);
        }
    },
    getBnbToUsdRate: async function() {
        const url = "https://api.binance.com/api/v3/ticker/price?symbol=BNBUSDT";

        try {
            const response = await fetch(url);
            if (!response.ok) {
                throw new Error(`Erreur HTTP: ${response.status}`);
            }

            const jsonResponse = await response.json();
            return jsonResponse.price; // Le prix du BNB en USD
        } catch (error) {
            console.error("Erreur lors de la récupération du taux de change BNB-USD: ", error);
            return null; // ou gérer l'erreur d'une autre manière
        }
    },




    GetglobalMembers: async function () {
        if (!this.userAccount) {
            console.error("User account is undifined")
            return;
        }

        try {
            const GlobalCommunity = await this.contract.methods.NumberOfUsers().call();
            const GlobalCommunityElement = document.getElementById("theCurrentNumber");


            if (GlobalCommunityElement) {
                GlobalCommunityElement.textContent = GlobalCommunity.toString();
            }
            else {
                console.error("Element 'GlobalCommunityElement' not found in the Dom");
            }
        } catch (error) {
            console.error("Error in fetching 'GlobalCommuniyElement:", error);

            if (document.getElementById('theCurentNumber')) {
                document.getElementById('theCurrentNumber').textContent = "0";
            }
        }
    },

    getTotalinvest: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined");
            return; // Arrêter l'exécution si le compte utilisateur est indéfini
        }

        try {
            const totalInvestWei = await this.contract.methods.totalInevest().call();
            const totalsec = await this.secondContract.methods.totalInevest().call();
            const Total =  BigInt(totalInvestWei) + BigInt(totalsec);

            const totalInvestBNB = Number(Total) / 1e18;

            const element = document.getElementById('BNBAmount');
            if (element) {
                element.textContent = `${parseFloat(totalInvestBNB).toFixed(3)} BNB`; // Afficher avec 3 décimales
            } else {
                console.error("Element 'BNBAmount' not found in the DOM");
            }
        } catch (error) {
            console.error("Error in fetching BNB Amount:", error);
            if (document.getElementById('BNBAmount')) {
                document.getElementById('BNBAmount').textContent = "0 BNB";
            }
        }
    },

    getTotalinvests: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined");
            return; // Arrêter l'exécution si le compte utilisateur est indéfini
        }

        try {
            const totalInvestWei = await this.contract.methods.totalInevest().call();
            const totalsec = await this.secondContract.methods.totalInevest().call();
            const Total =  BigInt(totalInvestWei) + BigInt(totalsec);

            const totalInvestBNB = Number(Total) / 1e18;



            const bnbToUsdRate = await this.getBnbToUsdRate();
            const totalIncomeUSD = totalInvestBNB * bnbToUsdRate;


            const element = document.getElementById('BNBAmounts');
            if (element) {
                element.textContent = `${parseFloat(totalIncomeUSD).toFixed(3)} USDT`; // Afficher avec 3 décimales
            } else {
                console.error("Element 'BNBAmount' not found in the DOM");
            }
        } catch (error) {
            console.error("Error in fetching BNB Amount:", error);
            if (document.getElementById('BNBAmount')) {
                document.getElementById('BNBAmount').textContent = "0 USDT";
            }
        }
    },




    getPartenairesCount: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            const directPartnersCount = await this.contract.methods.directPartnersCount(this.userAccount).call();
            const partnersCountElement = document.getElementById('partner'); // Assurez-vous que cet ID correspond à votre HTML

            if (partnersCountElement) {
                partnersCountElement.textContent = directPartnersCount.toString();
            } else {
                console.error("Element 'partnersCount' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching partners count:", error);
            // En cas d'erreur, affichez 0
            if (document.getElementById('partnersCount')) {
                document.getElementById('partnersCount').textContent = "0";
            }
        }
    },

    startDividendCounter: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        let lastUpdate;

        try {
            // Vérifier si l'utilisateur a un niveau actif dans le second contrat
            const levelInSecondContract = await this.secondContract.methods.G56Matrix(this.userAccount).call();

            if (levelInSecondContract > 0) {
                // Utiliser le lastUpdate du second contrat
                lastUpdate = await this.secondContract.methods.LastUpdate(this.userAccount).call();
            } else {
                // Utiliser le lastUpdate du premier contrat
                lastUpdate = await this.contract.methods.LastUpdate(this.userAccount).call();
            }

            this.updateDividendCounter(lastUpdate);

            // Mise à jour du compteur toutes les secondes
            setInterval(() => this.updateDividendCounter(lastUpdate), 1000);
        } catch (error) {
            console.error("Erreur lors de la récupération du dernier update:", error);
        }
    },



    updateDividendCounter: async function (lastUpdate) {
        try {
            const userAddress = this.userAccount;
            const currentTimestamp = Math.floor(Date.now() / 1000);
            const timeElapsed = currentTimestamp - lastUpdate;

            // Obtenir le niveau actuel dans les deux contrats
            const currentLevelFirstContract = Math.min(await this.contract.methods.G56Matrix(userAddress).call(), 2);
            const currentLevelSecondContract = await this.secondContract.methods.G56Matrix(userAddress).call();

            let initialAmount;

            if (currentLevelSecondContract > 0) {
                // Utiliser le niveau le plus élevé du second contrat pour calculer les dividendes
                const highestLevelPriceSecond = await this.secondContract.methods.levelPrices(currentLevelSecondContract).call();
                initialAmount = new web3.utils.BN(highestLevelPriceSecond);
            } else {
                // Utiliser soit les frais d'inscription, soit le prix du niveau le plus élevé du premier contrat (limité à 2 niveaux)
                const highestLevelPriceFirst = await this.contract.methods.levelPrices(currentLevelFirstContract).call();
                initialAmount = currentLevelFirstContract === 0 ? new web3.utils.BN(web3.utils.toWei('0.02', 'ether')) : new web3.utils.BN(highestLevelPriceFirst);
            }

            // Calculer les dividendes
            const dailyRate = web3.utils.toBN('2'); // Exemple de taux quotidien
            const dividendsPerSecond = initialAmount.mul(dailyRate).div(web3.utils.toBN('100')).div(web3.utils.toBN('86400'));
            const dividends = dividendsPerSecond.mul(web3.utils.toBN(timeElapsed));

            // Mise à jour de l'affichage
            this.updateDividendDisplay(web3.utils.fromWei(dividends.toString(), 'ether'));
        } catch (error) {
            console.error("Erreur lors de la mise à jour des dividendes:", error);
        }
    },


    getDirectTeam: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            const getTotalTeamSize = await this.contract.methods.getTotalTeamSize(this.userAccount).call();
            const partnersCountElement = document.getElementById('totalTeam'); // Assurez-vous que cet ID correspond à votre HTML

            if (partnersCountElement) {
                partnersCountElement.textContent = getTotalTeamSize.toString();
            } else {
                console.error("Element 'partnersCount' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching partners count:", error);

            if (document.getElementById('partnersCount')) {
                document.getElementById('partnersCount').textContent = "0";
            }
        }
    },

    updateDividendDisplay: function (dividends) {
        const dividendElement = document.getElementById('dividend-amount');
        if (dividendElement) {
            // Convertir les dividendes en nombre, puis fixer à 10 chiffres après la virgule
            const formattedDividends = parseFloat(dividends).toFixed(10);
            dividendElement.textContent = `${formattedDividends} BNB`;
        }
    },

    claimDividends: async function () {
        try {
            if (!this.userAccount) {
                console.error("User account is undefined.");
                return;
            }

            const dividendAmountText = document.getElementById('dividend-amount').textContent;
            const dividendAmount = dividendAmountText.split(' ')[0];
            const dividendAmountWei = web3.utils.toWei(dividendAmount, 'ether');

            // Vérifier si IsUpdate est vrai pour le second contrat
            const isUpdateInSecondContract = await this.secondContract.methods.IsUpdate(this.userAccount).call();

            if (isUpdateInSecondContract) {
                // Vérifier le solde du second contrat
                const secondContractBalanceWei = await web3.eth.getBalance(this.secondContract.options.address);
                if (BigInt(secondContractBalanceWei) >= BigInt(dividendAmountWei)) {
                    // Réclamer les dividendes du second contrat
                    await this.secondContract.methods.Claim_DIV(dividendAmountWei).send({ from: this.userAccount });
                    alert("Dividends claimed successfully, Check your Wallet and Enjoy life 😎");

                    console.log("Dividends successfully claimed from second contract.");
                    window.location.reload();

                } else {
                    alert("Your Pool Is Currently Inactive. Please Move To The Next Level To Keep Claiming😔.");
                }
            } else {
                // Vérifier le solde du premier contrat
                const contractBalanceWei = await web3.eth.getBalance(this.contract.options.address);
                if (BigInt(contractBalanceWei) >= BigInt(dividendAmountWei)) {
                    // Réclamer les dividendes du premier contrat
                    await this.contract.methods.Claim_DIV(dividendAmountWei).send({ from: this.userAccount });
                    alert("Dividends claimed successfully, Check your Wallet and Enjoy life 😎");

                    console.log("Dividends successfully claimed from primary contract.");
                    window.location.reload();

                } else {
                    alert("Your Pool Is Currently Inactive. Please Move To The Next Level To Keep Claiming😔.");
                }
            }

        } catch (error) {
            console.error("Error claiming dividends:", error);
        }
    },

    findTopPromoter: async function () {
        let maxPartnersCount = 0;
        let bestPromoterId = 0;

        try {
            const numberOfUsers = await this.contract.methods.NumberOfUsers().call();

            for (let userId = 1; userId <= numberOfUsers; userId++) {
                const userAddress = await this.contract.methods.idToAddress(userId).call();
                const partnersCount = await this.contract.methods.directPartnersCount(userAddress).call();

                if (parseInt(partnersCount) > maxPartnersCount) {
                    maxPartnersCount = parseInt(partnersCount);
                    bestPromoterId = userId;
                }
            }

            // Mise à jour de l'élément HTML avec l'ID du meilleur promoteur et le nombre de partenaires
            const bestPromoterElement = document.getElementById('best-promoter');
            if (bestPromoterElement) {
                bestPromoterElement.textContent = `ID ${bestPromoterId} with ${maxPartnersCount} Partners`;
            } else {
                console.error("Element 'best-promoter' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error finding top promoter:", error);
        }
    },


    genererLienParrainage: async function (adresseUtilisateur) {

        const baseUrl = "https://galaxy-mining.space/registration.html";
        const userId = await this.GetUserID(adresseUtilisateur);
        return `${baseUrl}?parrain=${encodeURIComponent(userId)}`;

    },

    genererEtAfficherLienParrainage: async function () {
        const adresseUtilisateur = this.userAccount;

        const lienParrainage = await this.genererLienParrainage(adresseUtilisateur);
        let elementLien = document.querySelector('.user-link-container .user-link');
        elementLien.href = lienParrainage;
        elementLien.textContent = lienParrainage;

    },




    GetUserID: async function (adresseUtilisateur) {
        if (!adresseUtilisateur) {
            console.error("Adresse utilisateur est undefined.");
            return null;
        }
        try {
            const userId = await this.contract.methods.UserID(adresseUtilisateur).call();
            return userId;
        } catch (err) {
            console.error("Erreur lors de la récupération de l'ID utilisateur:", err);
            return null;
        }
    },

    getVirtualTeam: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            const getTotalTeamSize = await this.contract.methods.getTotalVirtualTeamSize(this.userAccount).call();
            const partnersCountElement = document.getElementById('Virtual');

            if (partnersCountElement) {
                partnersCountElement.textContent = getTotalTeamSize.toString();
            } else {
                console.error("Element 'partnersCount' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching partners count:", error);

            if (document.getElementById('partnersCount')) {
                document.getElementById('partnersCount').textContent = "0";
            }
        }
    },


    getUserUpline: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            // Get the referrer's address
            const referrerAddress = await this.contract.methods.referrers(this.userAccount).call();

            const referrerId = await this.contract.methods.UserID(referrerAddress); // Assuming this function exists and works correctly
            const referrerIdElement = document.getElementById('referrerId');
            if (referrerIdElement) {
                referrerIdElement.textContent = referrerId ? `ID: ${referrerId}` : "No referrer";
            } else {
                console.error("Element 'referrerId' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching referrer details:", error);
            if (document.getElementById('referrerId')) {
                document.getElementById('referrerId').textContent = "0";
            }
        }
    },

    GetUserIDs: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            // Assuming a method exists in your contract to get the User ID from an address
            // Replace 'getUserIDFromAddress' with the actual contract method name
            const userID = await this.contract.methods.UserID(this.userAccount).call();

            // Update the UI element with the user's ID
            const idElement = document.getElementById('profile-id');

            if (idElement) {
                idElement.textContent = userID ? `ID: ${userID}` : "No ID";
            } else {
                console.error("Element 'profile-id' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching user ID:", 0);
            if (document.getElementById('profile-id')) {
                document.getElementById('profile-id').textContent = "0";
            }
        }
    },
    GetUserUpline: async function () {
        if (!this.userAccount) {
            console.error("User account is undefined.");
            return;
        }

        try {
            // Get the referrer's address using the contract method 'referrers'
            const referrerAddress = await this.contract.methods.referrers(this.userAccount).call();

            // Get the referrer's user ID using the contract method 'UserID'
            const uplineUserId = await this.contract.methods.UserID(referrerAddress).call();

            // Get the DOM element where the user's upline ID will be displayed
            const uplineIdElement = document.getElementById('referrerId');

            // Update the UI element with the upline user's ID
            if (uplineIdElement) {
                uplineIdElement.textContent = uplineUserId ? `ID: ${uplineUserId}` : "No Upline ID";
            } else {
                console.error("Element 'referrerId' not found in the DOM.");
            }
        } catch (error) {
            console.error("Error in fetching upline user ID:", error);
            if (document.getElementById('referrerId')) {
                document.getElementById('referrerId').textContent = "Error";
            }
        }
    },



    init: async function () {
        await this.connectContract();
        await this.connectSecondContract();

        const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
        if (accounts.length === 0) {
            console.error("No Ethereum accounts found.");
            return;
        }

        this.userAccount = accounts[0];
        const truncatedAddress = this.userAccount.substring(0, 6) + '...' + this.userAccount.substring(this.userAccount.length - 4);
        $('.wallet-address').text(truncatedAddress);


        await this.GetUserIDs();
        await this.GetUserUpline();

        await this.calculateTeamProfit();
        await this.genererEtAfficherLienParrainage();
        await this.getPartenairesCount();
        await this.getFreeIncome();
        await this.getDirectTeam();
        await this.calculateDivClaimed();

        await this.level();

        await this.Updatelevels();
        await this.getUserAddressAndSendToServer();
        await this.startDividendCounter();
        await this.updateDividendDisplay('0.000000000');
        await this.GetglobalMembers();
        await this.getTotalinvest();
        await this.calculateTotalProfits();
        await this.calculateTotalProfitsFor();
        await this.getVirtualTeam();
        await this.getTotalinvests();
        await this.findTopPromoter();



        const referrerAddress = await this.contract.methods.referrers(this.userAccount).call();
        const referrerId = await this.getUserIdByAddress(referrerAddress);
        if (referrerId !== null) {
            $('#referrerId').text('User ID ' + referrerId);
        } else {
            $('#referrerId').text('0');
        }



    }
};

document.addEventListener('DOMContentLoaded', (event) => {
    const claimButton = document.getElementById('claimDividendButton');
    if (claimButton) {
        claimButton.addEventListener('click', function () {
            if (galaxyMining && typeof galaxyMining.claimDividends === "function") {
                galaxyMining.claimDividends();
            } else {
                console.error("claimDividends function not found");
            }
        });
    } else {
        console.error("Claim button not found");
    }
});



$(document).ready(async () => {
    try {
        await galaxyMining.init();
    } catch (error) {
        console.error("Error in Ethereum interaction:", error);
    }
});

function copyToClipboard(selector) {
    const element = document.querySelector(selector);
    if (element) {
        navigator.clipboard.writeText(element.href)
            .then(() => console.log("Lien copié!"))
            .catch(err => console.error("Erreur lors de la copie: ", err));
    }
};
function goBack() {
    window.history.back();
}

function toggleMenu() {
    const leftSection = document.querySelector('.dashboard-header');
    leftSection.classList.toggle('show');
    leftSection.classList.toggle('hide-items');
}
async function countNewUsersFromTransactions() {
    const contractAddress = "0x597b599d2D197C49456b1C20Aae2C4BF1576396d";
    const apiKey = "V9JHTHBZYDPAKYCBZ484BPRQ5BZFY4J9XN";
    const url = `https://api.bscscan.com/api?module=account&action=txlist&address=0x597b599d2D197C49456b1C20Aae2C4BF1576396d&apikey=V9JHTHBZYDPAKYCBZ484BPRQ5BZFY4J9XN`;

    try {
        const response = await fetch(url);
        const data = await response.json();

        if (!data.result) {
            throw new Error("Aucune donnée de transaction trouvée");
        }

        const transactions = data.result;
        const currentTime = Math.floor(Date.now() / 1000);
        const twentyFourHoursAgo = currentTime - 86400; // 24 heures en secondes

        const newUsersCount = transactions.filter(tx => {
            const txTime = parseInt(tx.timeStamp);
            const txValueBNB = parseFloat(web3.utils.fromWei(tx.value, 'ether'));
            return txTime >= twentyFourHoursAgo && txValueBNB === 0.02;
        }).length;

        console.log(`Nombre d'inscriptions dans les dernières 24 heures: ${newUsersCount}`);
        const newUsersElement = document.getElementById('New24hoursUsers');
        if (newUsersElement) {
            newUsersElement.textContent = newUsersCount;
        } else {
            console.error("Élément 'New24hoursUsers' non trouvé dans le DOM.");
        }
    } catch (error) {
        console.error('Erreur lors de la récupération des données:', error);
    }
}

// Appel de la fonction une fois que le DOM est entièrement chargé
document.addEventListener('DOMContentLoaded', (event) => {
    countNewUsersFromTransactions();
});

