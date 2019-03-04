<div align="center">
  
![](https://img.shields.io/github/release/nawab69/steemtools.svg?style=flat-square)
![](https://img.shields.io/github/license/nawab69/steemtools.svg?style=popout-square)
![](https://img.shields.io/github/last-commit/nawab69/steemtools.svg?style=flat-square)

<br>

![steemtools logotype2](https://user-images.githubusercontent.com/44573643/53733567-91535c80-3eab-11e9-833d-9281203cf178.png)


http://steemtools.cf

</div>

## Installations 

- First Download the zip file
- Then copy it to your php server(php v7.0+ required)
- Extract the zip file.
- Now create a .htaccess file in your server and paste the below code;

```
#remove php file extension-e.g. https://example.com/file.php will become https://example.com/file
RewriteEngine on 
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}\.php -f
RewriteRule ^(.*)$ $1.php [NC,L]
```
- save the file
- Now open ``yoursite/index`` to open the homepage.

## Features
- Unique steemtools API
- STEEMIT Blog/post words & Characters counter
- Withdraw Route check
- Withdraw Route Change
- Withdraw Route Remove

## Technology
- PHP 7.0 
- HTML 5
- Bootstrap
- JSON
- JavaScript
- SteemConnect
- SteemJS

## Contribute

As it is an open source project,  anyone can contribute this project. 
Simply upload your file / fork,  then inbox me. You can also contribute in our development process by utopian-io . 

## Roadmap

- Create many kind of steemit tools.
- Frontend Design.
- Create steemtools API Library.
- Make steemit easier.
- Release some php tools & plugin of steemit.


## SteemTools API Documentation
**API URL** : https://api.steemtools.cf
**Method** : GET

### Endpoints

-------
### /get_withdraw_routes

get_withdraw_routes has 1 parameters. its ``account``.

| parameters  | type   | details           |
|-------------|--------|-------------------|
| account     | string | user account name |

API: https://api.steemtools.cf/get_withdraw_routes?account=value

Result:

```
[{"id":0,"from_account":"","to_account":"","percent":0,"auto_vest":false}]
```

CURL 

```
curl -X GET -v -i 'https://api.steemtools.cf/get_withdraw_routes?account=value'
```
--------
### /get_volume

No parameters

API:  https://api.steemtools.cf/get_volume

Result:  
```
{"steem_volume":"11083.861 STEEM","sbd_volume":"4343.484 SBD"}
```

Curl:
```
curl -X GET -v -i 'https://api.steemtools.cf/get_volume'
```

-------

### /get_vesting_delegations

It has three parameters. These are ``account,start,limit``

| parameters  | type   | details           |
|-------------|--------|-------------------|
| account     | string | user account name |
| start       | string   | start from        |
| limit       | int    | limit upto 1000   |

API: https://api.steemtools.cf/get_vesting_delegations?account=value&start=value&limit=value

Example Result
```
[
  {
    "id": 97323,
    "delegator": "steem",
    "delegatee": "null-a",
    "vesting_shares": "9139.384274 VESTS",
    "min_delegation_time": "2017-07-24T14:04:57"
  },
  {
    "id": 1057809,
    "delegator": "steem",
    "delegatee": "null-name",
    "vesting_shares": "9836.682166 VESTS",
    "min_delegation_time": "2018-10-04T06:59:15"
  }
]
```
Curl:
```
curl -X GET -v -i 'https://api.steemtools.cf/get_vesting_delegations?account=value&start=value&limit=value'
```

-------

### /get_version

No parameters

API : https://api.steemtools.cf/get_version

Example Result:
```
{"blockchain_version":"0.20.9","steem_revision":"46c3bdbff14166355e81b4b543e3be4b767ac0d2","fc_revision":"46c3bdbff14166355e81b4b543e3be4b767ac0d2"}
```
Curl Command:
```
curl -X GET -v -i 'https://api.steemtools.cf/get_version'
```
------

### /get_trending_tags

Parameters

| parameters  | type | details          |
|-------------|------|------------------|
| start       | string  | start from tag   |
| limit       | int  | limit total tags |

API : https://api.steemtools.cf/get_trending_tags?start=value&limit=value

Example result  [First 10 trending tags]

```
[{"name":"dtube","comments":10784,"top_posts":3247,"total_payouts":"8605.089 SBD"},{"name":"photography","comments":8959,"top_posts":2733,"total_payouts":"5513.981 SBD"},{"name":"utopian-io","comments":1400,"top_posts":194,"total_payouts":"4781.642 SBD"},{"name":"life","comments":5733,"top_posts":1595,"total_payouts":"4462.091 SBD"},{"name":"steem","comments":6276,"top_posts":693,"total_payouts":"4122.676 SBD"},{"name":"steemhunt","comments":6671,"top_posts":1322,"total_payouts":"3996.732 SBD"},{"name":"kr","comments":7481,"top_posts":1248,"total_payouts":"3487.843 SBD"},{"name":"spanish","comments":6527,"top_posts":1620,"total_payouts":"3241.260 SBD"},{"name":"art","comments":4315,"top_posts":1038,"total_payouts":"3103.509 SBD"},{"name":"tasteem","comments":5570,"top_posts":466,"total_payouts":"2489.056 SBD"}]
```

CURL COMMAND :
```
curl -X GET -v -i 'https://api.steemtools.cf/get_trending_tags?start=value&limit=value'
```
-------

### /get_trade_history

| parameters  	| type 	| details 	|
|-------------	|-----------	|-----------------	|
| start 	| timestamp 	| start timestamp 	|
| end 	| timestamp 	| end timestamp 	|

API : https://api.steemtools.cf/get_trade_history?start=value&end=value

Example Result :
```
[]
```
Curl Command : 
```
curl -X GET -v -i 'https://api.steemtools.cf/get_trade_history?start=value&end=value'
```

-----

### /get_ticker

No parameters

API : https://api.steemtools.cf/get_ticker

Example Result :

```
{"latest":"0.42857142857142855","lowest_ask":"0.40211953785662852","highest_bid":"0.40210843373493976","percent_change":"0.00000000000000000","steem_volume":"11885.420 STEEM","sbd_volume":"4689.431 SBD"}
```

Curl Command :
```
curl -X GET -v -i 'https://api.steemtools.cf/get_ticker'
```

### /get_recovery_request

| parameters  | type   | details           |
|-------------|--------|-------------------|
| account     | string | user account name |

API: https://api.steemtools.cf/get_recovery_request?account=value

Example result 
```
null
```

Curl Command

```
curl -X GET -v -i 'https://api.steemtools.cf/get_recovery_request?account=value
```

----

### /get_savings_withdraw_to

| parameters  | type   | details           |
|-------------|--------|-------------------|
| account     | string | user account name |

API: https://api.steemtools.cf/get_savings_withdraw_to?account=value

Example result 
```
[]
```

Curl Command

```
curl -X GET -v -i 'https://api.steemtools.cf/get_savings_withdraw_to?account=value
```
------

### /get_savings_withdraw_from

| parameters  | type   | details           |
|-------------|--------|-------------------|
| account     | string | user account name |

API: https://api.steemtools.cf/get_savings_withdraw_from?account=value

Example result 
```
[]
```

Curl Command

```
curl -X GET -v -i 'https://api.steemtools.cf/get_savings_withdraw_from?account=value
```
 -----

### /get_account_count

No parameters

API 
https://api.steemtools.cf/get_account_count

Example Result
```
{
    "total_account": 1231573
}
```

Curl Command
```
curl -X GET -v -i 'https://api.steemtools.cf/get_account_count'
```

### /get_blog_count (unique API End point)

It results total number of words & characters of a steemit post/blog.


| parameters  | type   | details           |
|-------------|--------|-------------------|
| url     | string | steemit post url |

API
https://api.steemtools.cf/get_blog_count?url=value

Example Result

```
{
    "name": "nawab69",
    "url": "https:\/\/steemit.com\/utopian-io\/@nawab69\/steemtools-check-account-status-for-blacklist-tool-building-tutorial-part-9",
    "total_words": 1202,
    "total_char": 9701,
    "net_votes": 120
}
```
CURL Command
```
curl -X GET -v -i 'http://api.steemtools.cf/get_blog_count?url=value'
```
----

### /get_active_votes 

| parameters  | type   | details           |
|-------------|--------|-------------------|
| author   | string | steemit post author name |
| permlink | string | post permlink |

API
https://api.steemtools.cf/get_active_votes?author=value&permlink=value

Example Result

```
[
{"voter":"tombstone","weight":183546,"rshares":"2528467723996","percent":1068,"reputation":0,"time":"2019-03-01T11:07:06"},{"voter":"roy2016","weight":122632,"rshares":"128588800380","percent":2500,"reputation":0,"time":"2019-02-28T21:54:06"},{"voter":"techslut","weight":51310,"rshares":"66325979308","percent":2000,"reputation":0,"time":"2019-02-28T22:50:12"}
]
```
CURL Command
```
curl -X GET -v -i 'http://api.steemtools.cf/get_active_votes?author=value&permlink=value'
```
-----

### /get_accounts

| parameters  | type   | details           |
|-------------|--------|-------------------|
| account     | string | user account name |

API:
https://api.steemtools.cf/get_accounts?account=value

Example Result
```
[{"id":1160113,"name":"nawab69","owner":{"weight_threshold":1,"account_auths":[],"key_auths":[["STM5Q1cCzmr7dQmJZSrJA7wDaaZc2KpqW2o8RbkDmHugHnXLAKEuX",1]]},"active":{"weight_threshold":1,"account_auths":[],"key_auths":[["STM7GURmxTARsCX3tgRJ6rAcYpswc4HXmiw2mUpHMuuMsTkR6JMFX",1]]},"posting":{"weight_threshold":1,"account_auths":[["actifit.app",1],["busy.app",1],["dtube.app",1],["esteem-app",1],["fundition.app",1],["knacksteem.app",1],["partiko-steemcon",1],["peakmonsters.app",1],["smartsteem",1],["steeditor.app",1],["steem.app",1]],"key_auths":[["STM6NUNNqHkfC3zDhAiW9TK8SiUMWbAkrqe2TguNH8PgB7ZwMdKqH",1]]},"memo_key":"STM8FVULWcdLukbJ5BhJQZpXWPGiLfRzz5vyAeawnunDr8t7Nk2jZ","json_metadata":"{\"profile\":{\"name\":\"Nawab\",\"about\":\"A professional web application developer. Frontend and Backend Developer. Software Engineer. Game Developer. Nodejs, reactjs and blockchain Developer.\",\"website\":\"https:\/\/steemtools.cf\",\"location\":\"UK\",\"cover_image\":\"https:\/\/cdn.steemitimages.com\/DQmQdxKgsJXHUstxoei8sPAV4YFr7hWfgCosckkqxBtfCe8\/images%20(9).jpeg\",\"profile_image\":\"https:\/\/cdn.steemitimages.com\/DQmPJzT9qae7sDGi1YzB3MxjRbGdY84jkqcGYhb6D8oBdqD\/483127560-612x612.jpg\"}}","proxy":"","last_owner_update":"1970-01-01T00:00:00","last_account_update":"2019-02-14T04:33:27","created":"2018-10-28T13:04:24","mined":false,"recovery_account":"blocktrades","last_account_recovery":"1970-01-01T00:00:00","reset_account":"null","comment_count":0,"lifetime_vote_count":0,"post_count":42,"can_vote":true,"voting_manabar":{"current_mana":"187499397255","last_update_time":1551712185},"voting_power":7885,"balance":"8.228 STEEM","savings_balance":"0.000 STEEM","sbd_balance":"0.591 SBD","sbd_seconds":"73132113","sbd_seconds_last_update":"2019-03-04T13:28:45","sbd_last_interest_payment":"2019-02-21T02:37:39","savings_sbd_balance":"0.000 SBD","savings_sbd_seconds":"0","savings_sbd_seconds_last_update":"1970-01-01T00:00:00","savings_sbd_last_interest_payment":"1970-01-01T00:00:00","savings_withdraw_requests":0,"reward_sbd_balance":"0.000 SBD","reward_steem_balance":"0.000 STEEM","reward_vesting_balance":"4.005786 VESTS","reward_vesting_steem":"0.002 STEEM","vesting_shares":"239814.319762 VESTS","delegated_vesting_shares":"0.000000 VESTS","received_vesting_shares":"13747.039293 VESTS","vesting_withdraw_rate":"15787.521634 VESTS","next_vesting_withdrawal":"2019-03-11T12:40:21","withdrawn":"15787521634","to_withdraw":"205237781243","withdraw_routes":0,"curation_rewards":46,"posting_rewards":288222,"proxied_vsf_votes":[0,0,0,0],"witnesses_voted_for":13,"last_post":"2019-02-28T20:23:27","last_root_post":"2019-02-28T20:23:27","last_vote_time":"2019-03-04T15:09:45","post_bandwidth":0,"pending_claimed_accounts":0,"vesting_balance":"0.000 STEEM","reputation":"4428501705143","transfer_history":[],"market_history":[],"post_history":[],"vote_history":[],"other_history":[],"witness_votes":["abit","bhuz","blocktrades","busy.witness","curie","good-karma","pharesim","reggaemuffin","steemitboard","themarkymark","therealwolf","utopian-io","yabapmatt"],"tags_usage":[],"guest_bloggers":[]}]
```

Curl Command
```
curl -X GET -v -i 'https://api.steemtools.cf/get_accounts?account=value'
```
-----
