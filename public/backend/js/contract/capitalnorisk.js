var capital = function () {
    'use strict';
    const initializeContract= async function(){

    }
    const getAccount= async function(){
        window.web3 = new Web3(ethereum);
        const accounts = await window.web3.eth.getAccounts();
        return accounts[0];
    };
    const initialiseEtheruim= async function () {
        if (window.ethereum) {
            window.web3 = new Web3(ethereum);
            try {
                var networkid = await web3.eth.net.getId()
                if (networkid !== 56) {
                    alert('Connect to BNB Mainnet Network');
                } else {
                    var id_user = $('#id_user_smart').text();
                }
                console.log(networkid)
            } catch (error) {
                alert('Error: Out of Gas: please reload this page')
            }
        } else if (window.web3) {
            window.web3 = new Web3(web3.currentProvider);
            web3.eth.sendTransaction({/* ... */});
        } else {
            alert('Requires ETH purse to interact smart contract You should consider trying MetaMask!');

        }
    };
    const sendPayment= async function(){
        const account=await getAccount();
        const amount=$('#amount').val()
        var balance = await web3.eth.getBalance(account)
        const registrationFee = web3.utils.toWei('0.02', 'ether');
        console.log(registrationFee)
    }
    return {
        initialiseEtheruim,
        getAccount,
        sendPayment
    }
}();
