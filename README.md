# Disaster-Management


This is codefundo++ project based on the idea of disaster management and provide a model to predict and manage natural disaster.

The most dangerous disasters of the modern times are thunderstorm.

Needs:-

Thunderstorm is one of the most hotly debated topics in the world since it always causes a huge damage to life and property.
Each year, millions of people are affected due to disasters and millions worth of property is damaged.

Aim of our project:-

We have tried to implement the data of previous years like Average Temperature(in F),Highesh Temperature(in F),Lowest Temperature(in F),Date,Dew Point Highest(in F),Dew Point lowest(in F),Dew point average(in F),Humdity High Percent,Humidty Low Percent,Humidity Average Percent,Sea Level Average(in inches),Sea level Highesh(in inches),Sea level lowest(in inches),Visibility Average(in miles),Visibility Lowest(in miles),Visibility Highest(in miles),Wind speed Highest,Wind Gust speed,Wind Speed Average and Precipitation Sum(in inches) to find the probability of the occurrence of Thunderstorm i.e. say how prone a particular place is for Thunderstorm.
We have also provided a personal wether widget for every user to know his wether report for next few days.
Some related do's and don'ts can also be given regarding prevention of damage to loss of life and property.

Prediction and Management of Natural Disasters :-

Natural disasters cannot be predicted accurately, but we have estimated their occurrence with the help of database provided by kaggle.Because of lack of databases containing the measure of occurrence of thunderstorm in form of binary answer and of  a particular District of Texas,USA prone to Thunderstorm Austin.We have Taken the data from https://www.kaggle.com/grubenm/austin-weather. We have then made and used the model on https://studio.azureml.net and have generated a api key which have been trained on the basis of given databases that is extracted from a self hosted webpage https://deepeshsunny8.000webhostapp.com/ and we have splitted the data in ratio of 9:1 to train and check the conformabilty of data.We have then used that api key of our experiment to provide our input data in form of JSON string and have requested to the  provided url,it on other half provide a JSON data containing the output for the prediction of Thunderstorm.We have also implemented a data in such a way that on providing data of current day will give us prediction of the probability of happening of thunderstorm on next day.

API Key: "uzPcr8K9qMmCcIfH7ubqlMlbtLocORGUZEA+N0MEQb43uOM0q9C5EXfMFiYRw9hvZFgSimhlwchECQoCVoOY7g=="
url: "https://ussouthcentral.services.azureml.net/workspaces/75db7323ce3148c385c6e3493a168335/services/4cc21d07da91497085c8925c46106808/execute?api-version=2.0&details=true".

Representation of data:-

A very simple Graphical user interface To surf the website and know its functionalities.The predicted value is displayed in an alert format on submission of all the required feilds.

Database :-

Due to shortage of database as required in the format mentioned above we have used the database of kraggle  and used all its feild to train our model best.We could have also connected our webpage to a meteorological data provider for getting all the present data of Austin,but due to lack of api services regarding this and scrapping(which was against the rules)we are Currently taking all the data from the users.Assuming he could render few of these basic data of his location easily.

Weather widget:
We have used a javascript oriented structure and have requested for the weather report from api 'https://api.wunderground.com/api/d6fadca18738e4ec/geolookup/conditions/forecast/q/'Location'/json'.to get the weather data of a particular location where user is present we have also provided the link to enable the geoLocation for the website.

Future Scope of our Project:-

Currently, we have used meteorological data from just one city, Austin.
If we had better api's and real time data access, then we could well have made our app universal.
Currently our app just predicts thunderstorm, but in future we can also include many other natural disasters like floods and earthquakes and many other natural disasters.
We could also have made real time prediction for all the cities had we been allowed access to scrapping of data from meteorological websites.
We may also collaborate with any government agency who would provide us with such weather data which we can later process.
We may also have used better neural networks.

Futher exploration of our webiste is present at "https://www.youtube.com/watch?v=mdqO6frS8RY&feature=youtu.be&fbclid=IwAR0gXb_Qwuy623T6062cAA3CNfJAi-EOs_kgvplrCyLsBFTsrn1L_dbhT6M".

Finally we have hosted our website at "https://brogrammers.azurewebsites.net//weather_final/index1.html".
