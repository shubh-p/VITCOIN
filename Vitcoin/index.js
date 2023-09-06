
const Menu = document.getElementById('Menu')
const closeBtn = document.getElementById('closeBtn')
const links = document.getElementById('links')

Menu.onclick = () => {
     Menu.style.display = 'none'
     closeBtn.style.display = 'block'
     links.style.display = 'block'
}

closeBtn.onclick = () => {
     Menu.style.display = 'block'
     closeBtn.style.display = 'none'
     links.style.display = 'none'
}
const bitcoin = document.getElementById('bitcoin')
const ethereum = document.getElementById('ethereum')
const litecoin = document.getElementById('litecoin')
const btcBtn = document.getElementById('btc-btn')
const ethBtn = document.getElementById('eth-btn')
const lteBtn = document.getElementById('lte-btn')
const buyBtc = document.getElementById('buy-btc')
const buyEth = document.getElementById('buy-eth')
const buyLte = document.getElementById('buy-lte')

bitcoin.onclick = () => {
     bitcoin.style.backgroundColor = 'var(--color2)'
     bitcoin.style.color = 'white'
     btcBtn.style.display = 'none'
     buyBtc.style.display = 'block'
     ethereum.style.backgroundColor = 'transparent'
     ethereum.style.color = 'black'
     ethBtn.style.display = 'block'
     buyEth.style.display = 'none'
     litecoin.style.backgroundColor = 'transparent'
     litecoin.style.color = 'black'
     lteBtn.style.display = 'block'
     buyLte.style.display = 'none'
}
ethereum.onclick = () => {
     bitcoin.style.backgroundColor = 'transparent'
     bitcoin.style.color = 'black'
     btcBtn.style.display = 'block'
     buyBtc.style.display = 'none'
     ethereum.style.backgroundColor = 'var(--color2)'
     ethereum.style.color = 'white'
     ethBtn.style.display = 'none'
     buyEth.style.display = 'block'
     litecoin.style.backgroundColor = 'transparent'
     litecoin.style.color = 'black'
     lteBtn.style.display = 'block'
     buyLte.style.display = 'none'
}
litecoin.onclick = () => {
          bitcoin.style.backgroundColor = 'transparent'
          bitcoin.style.color = 'black'
          btcBtn.style.display = 'block'
          buyBtc.style.display = 'none'
          ethereum.style.backgroundColor = 'transparent'
          ethereum.style.color = 'black'
          ethBtn.style.display = 'block'
          buyEth.style.display = 'none'
          litecoin.style.backgroundColor = 'var(--color2)'
          litecoin.style.color = 'white'
          lteBtn.style.display = 'none'
          buyLte.style.display = 'block'
     }

