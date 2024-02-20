# Lush Scraper API

[![Oxylabs promo code](https://user-images.githubusercontent.com/129506779/250792357-8289e25e-9c36-4dc0-a5e2-2706db797bb5.png)](https://oxylabs.go2cloud.org/aff_c?offer_id=7&aff_id=877&url_id=112)

Oxylabs' [Lush Scraper](https://oxylabs.io/products/scraper-api/ecommerce/lush?utm_source=github&utm_medium=repositories&utm_campaign=product) is a data gathering solution allowing you to extract real-time information from an Lush website effortlessly. This brief guide showcases how Lush Scraper works, along with code examples to help you better understand how to use it hassle-free.

### How it works

You can get Lush results by providing your own URLs to our service. We can return the HTML for any page you like.

#### Python code example

The example below illustrates how you can get HTML of Lush page.

```python
import requests
from pprint import pprint

# Structure payload.
payload = {
    'source': 'universal_ecommerce',
    'url': 'https://www.lush.com/us/en_us/c/hair-care?gad_source=1&gclid=cjwkcaiaungubhakeiwagid4am0kiglhmkfpbgcpf2dccwnx9sjfbaahgubt2cpwy2b8cq2hjv5eohochhgqavd_bwe'
}

# Get response.
response = requests.request(
    'POST',
    'https://realtime.oxylabs.io/v1/queries',
    auth=('user', 'pass1'),
    json=payload,
)

# Instead of response with job status and results url, this will return the
# JSON response with the result.
pprint(response.json())
```
Find code examples for other programming languages [**here**](https://github.com/oxylabs/lush-scraper/tree/main/code%20examples)

#### Output Example
```json
{
  "results": [
    {
      "content": "<!DOCTYPE html><html lang=\"en-US\"><head><meta charSet=\"utf-8\" /><title>Hair | Lush Fresh Handmade Co ... </html>",
      "created_at": "2024-02-20 12:55:23",
      "updated_at": "2024-02-20 12:55:27",
      "page": 1,
      "url": "https://www.lush.com/us/en_us/c/hair-care?gad_source=1&gclid=cjwkcaiaungubhakeiwagid4am0kiglhmkfpbgcpf2dccwnx9sjfbaahgubt2cpwy2b8cq2hjv5eohochhgqavd_bwe",
      "job_id": "7165690401985142785",
      "status_code": 200
    }
  ]
}
```
Using our specialized Lush Scraper, you can easily gather public data from all official Lush web pages. Get essential product information, from price, customer reviews, to detailed descriptions, providing you with valuable insights to maintain your lead in the competitive cosmetics market. If you need any assistance, feel free to reach out to our dedicated support team through live chat or drop us an email at hello@oxylabs.io.