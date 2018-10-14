## Our site is live [Here](home.iitk.ac.in/~adimis)

# RIPE CUCUMBERS ML PICKLE RECIPE

This repository contains the web app of Ripe Cucumbers, an app which rates movies that are about to be released, i.e. it looks into the future. It reads the data given as input and predicts the probability of the film bein 'Hit', 'Average' or 'Flop'. It uses the tools offered by Microsoft such as AzureML studio and prose to make the life of developers easier.

# explanation of the ML algo

![alt text](https://i.imgur.com/QF66s2n.png)

We import data as a CSV(comma seperated file) from the source-code of the website {http://home.iitk.ac.in/~kushgpt/} using the import data feature. The data is then processed to form a proper dataset using 'Convert to Dataset' feature. The 'Edit Metadata' feature enables us to transform the data as per our requirements. For this app, we have converted the release month into string from numbers. We have also converted other text inputs such as keywords1, keywords2, actor1, actor2 etc into string inputs (categorical input). One recurring problem of scrapping data from various sources is that often some columns remain empty. This problem is solved by 'Clean Missing Data', a feature which enables us to substitute missing values by either '0' or by statistical outputs like mean, variance of the non-empty data in that column. 'Select Column in dataset' enables us to exclude certain features that we believe are not that important for predicting the outcome of the movie such as lets say original lanuage of the movie. An important tool for any ML algo is normalization, which scales down the values in a column so that all columns have roughly the same spread, therefore the training output not being biased towards columns with bigger values.  
Hyper-parameters are the parameters that are given to the program pre-execution, which affect the learning of the model he module builds and tests models multiple models, using different combinations of settings, and compares metrics over all models to get the combination of settings.The terms parameter and hyperparameter can be confusing. The model's parameters are what you set in the properties pane. Basically, this module performs a parameter sweep over the specified parameter settings, and learns an optimal set of hyperparameters, which might be different for each specific decision tree, dataset, or regression method. The process of finding the optimal configuration is sometimes called tuning. Hyper-parameter tuning using something called parameter-sweep. When you set up a parameter sweep, you define the scope of your search, to use either a finite number of parameters selected randomly, or an exhaustive search over a parameter space you define. Accuracy is used as a parametric for tuning.
What makes hyper-parameter tuning possible is partition and sample. Sampling is an important tool in machine learning because it lets you reduce the size of a dataset while maintaining the same ratio of values. It works by dividing your data into multiple subsections of the same size, separating data into groups and then working with data from a specific group., sampling (You can extract a percentage of the data, apply random sampling, or choose a column to use for balancing the dataset and perform stratified sampling on its values) and finally creating a smaller dataset for testing. Therefore, partition and sample assisted hyper parameter tuning ensure the best accuracy out of any optimization algo. Score model scores the algo on testing data by selecting a column to be treated as the label for train model.

![alt text](https://i.imgur.com/7OfV0ID.png)

After the training is finished, the model is stored as a trained model, which is then directly used after importing and pre-processing input data. But this time around, the label column is also excluded. Input of webservice is given to score model and the output to another column selector, which returns the columns that you need in output.

![alt text](https://i.imgur.com/ps1Szzf.png)

![alt text](https://i.imgur.com/mWzrdsa.png)

[api url]{https://ussouthcentral.services.azureml.net/workspaces/8d9305016d584c0e8502a915a50de700/services/92e9367b9263492eaf12479462cb1a47/execute?api-version=2.0&details=true}

[Request Response API Documentation for code.fun.do ripe cucumbers]{https://studio.azureml.net/apihelp/workspaces/8d9305016d584c0e8502a915a50de700/webservices/f2acd7929ae34cbe852e3069f6abf5eb/endpoints/b53afeb937b0492bbf07df4b66b1ff46/score}


This web application is made to cater to the growing needs of recommendation providers as the number of options are numerous these days. It serves as a quite user-friendly provision for the same.This web application is made to cater to the growing needs of recommendation providers as the number of options are numerous these days. It serves as a quite user-friendly provision for the same.
It has quick access to all the pages, an elaborate home page, all relevant contact information in form of telephone number, email-address, facebook, twitter, google+ and pinterest account, a provision to review movies, a provision to join our team and to top it all the location of our headquarters.
So users can see before booking their tickets what is the chance of the film being hit across theatres at just one click.

The major input ingredient for any kind of ML to work is the data. The amount of data directly governs our accuracy. Therefore to have good accuracy we need a lot of data. Gathering and arranging such huge amounts of data is a herculean task if done by manual methods. So to overome this problemwe use PROSE.
Visual Studio is the initial assistant to start our work on PROSE. We first had to clone the repository [PROSEWordPLugin](https://github.com/nextLane/PROSEWordPlugin). Then host the FlashAPI on a local server usin Visual Studio Community 2017. Then open PROceSeEd.sln and run the project.
PROSE is the best SDK we have encountered yet. It uses programming by examples to our precise need. We used it to extract and transform our data from JSON format to the text format we needed. We initially fed some data ourseleves and then PROSE picked up our pattern and did the rest for us in a jiffy. Without this it may have not been possible to create this algorithm.

 
It has quick access to all the pages, an elaborate home page, all relevant contact information in form of telephone number, email-address, facebook, twitter, google+ and pinterest account, a provision to review movies, a provision to join our team and to top it all the location of our headquarters.
So users can see before booking their tickets what is the chance of the film being hit across theatres at just one click.

The major input ingredient for any kind of ML to work is the data. The amount of data directly governs our accuracy. Therefore to have good accuracy we need a lot of data. Gathering and arranging such huge amounts of data is a herculean task if done by manual methods. So to overome this problemwe use PROSE.
Visual Studio is the initial assistant to start our work on PROSE. We first had to clone the repository [PROSEWordPLugin](https://github.com/nextLane/PROSEWordPlugin). Then host the FlashAPI on a local server usin Visual Studio Community 2017. Then open PROceSeEd.sln and run the project.
PROSE is the best SDK we have encountered yet. It uses programming by examples to our precise need. We used it to extract and transform our data from JSON format to the text format we needed. We initially fed some data ourseleves and then PROSE picked up our pattern and did the rest for us in a jiffy. Without this it may have not been possible to create this algorithm.

[word plug-in github url]{https://github.com/nextLane/PROSEWordPlugin}


## P.S. Do subscribe for more cool features
