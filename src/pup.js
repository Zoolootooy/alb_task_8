const puppeteer = require('puppeteer');
const fs = require("fs");

(async function main() {
    try {
        const browser = await puppeteer.launch();
        const [page] = await browser.pages();

        await page.goto('http://httpbin.org/ip', { waitUntil: 'networkidle0' });
        const data = await page.evaluate(() => document.querySelector('*').outerHTML);

        fs.writeFileSync("output/parse2.html", data)


        await browser.close();
    } catch (err) {
        console.error(err);
    }
})();