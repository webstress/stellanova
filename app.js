const menuButton = document.getElementById("menu-button");
const mobileMenu = document.getElementById("mobile-menu");

menuButton.addEventListener("click", () => {
  // Toggle the transform class for sliding effect
  mobileMenu.classList.toggle("translate-x-full");
  mobileMenu.classList.toggle("translate-x-0");
});

// script.js
const apiUrl = 'https://api.coincap.io/v2/assets';
const targetCoins = ['bitcoin', 'ethereum', 'tether', 'solana', 'binance-coin', 'usd-coin', 'xrp'];

async function getCryptoData() {
    try {
        const response = await fetch(apiUrl);
        const data = await response.json();
        const filteredData = data.data.filter(crypto => targetCoins.includes(crypto.id));
        displayData(filteredData);
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

function displayData(cryptos) {
    const cryptoTableBody = document.getElementById('crypto-table-body');
    cryptoTableBody.innerHTML = ''; // Clear any existing data

    const exchangeRate = 770; // Example USD to NGN exchange rate

    cryptos.forEach(crypto => {
        const priceInNGN = (crypto.priceUsd * exchangeRate).toFixed(2);
        const marketCapInNGN = (crypto.marketCapUsd * exchangeRate).toFixed(2);
        const volumeInNGN = (crypto.volumeUsd24Hr * exchangeRate).toFixed(2);
        const supply = parseFloat(crypto.supply).toLocaleString(undefined, {maximumFractionDigits: 0});
        const changePercent = parseFloat(crypto.changePercent24Hr).toFixed(2);
        const changeClass = changePercent >= 0 ? 'positive-change' : 'negative-change';

        const row = `<tr>
            <td>${crypto.name}</td>
            <td>NGN ${priceInNGN}</td>
            <td class="${changeClass}">${changePercent}%</td>
            <td>NGN ${marketCapInNGN}</td>
            <td>NGN ${volumeInNGN}</td>
            <td>${supply}</td>
            <td><button class="trade-button">Trade</button></td>
        </tr>`;

        cryptoTableBody.innerHTML += row;
    });
}

// Fetch and display data on page load
getCryptoData();

// Optional: Refresh data every minute
setInterval(getCryptoData, 60000);
