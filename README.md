# Project Anyder

### What's the difference?
This is a forked version of GarlandTools for [Project Anyder](https://anyder.now.sh) which is a unofficial database for FFXIV Korean service. <br>
It has several tweaks for Project Anyder, so it's not completely compatible with the original GarlandTools project. <br>
For Example, it does NOT produce fish.js and nodes.js becuase Project Anyder does not use Garland.Web frontend. <br>
Due to the delayed update of Korean server, It could be better to adopt already verified 3rd party data instead of extracting them from the client. So I applied those kinds of optimizations, too.

## Additional Supplements
+ lodestones.tsv : obtained by [lds-item-parse](https://github.com/Ariette/lds-item-parse). It contains drop, instance and acquire data from lodestones.
+ nodes.json : obtained by [ffxiv-teamcraft](https://github.com/ffxiv-teamcraft/ffxiv-teamcraft/blob/staging/apps/client/src/assets/data/nodes.json). It contains coords data of almost every nodes.

## License
+ FFXIV TeamCraft (c) 2017 Flavien Normand, MIT License
+ GarlandTools (c) 2018 Chris Faulhaber, MIT License