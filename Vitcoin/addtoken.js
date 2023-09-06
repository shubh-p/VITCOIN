const tokenAddress = '0xd57019d647cE7C93d553Cf27d538ef44B60faD45';
const tokenSymbol = 'VITCOIN';
const tokenDecimals = 18;
const tokenImage = 'https://assets.codepen.io/4625073/1.jpeg';

async function addTokenFunction() {

try {
  
  const wasAdded = await ethereum.request({
    method: 'wallet_watchAsset',
    params: {
      type: 'ERC20', 
      options: {
        address: tokenAddress, 
        symbol: tokenSymbol, 
        decimals: tokenDecimals, 
        image: tokenImage, 
      },
    },
  });

  if (wasAdded) {
    console.log('Thanks for your interest!');
  } else {
    console.log('VITCoin has not been added');
  }
} catch (error) {
  console.log(error);
}
}