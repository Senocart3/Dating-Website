using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Datiing
{
    #region Register
    public class Register
    {
        #region Member Variables
        protected int _id;
        protected string _first;
        protected string _last;
        protected string _email;
        protected string _password;
        protected string _password;
        protected int _phone;
        protected string _month;
        protected int _day;
        protected int _year;
        protected string _me;
        protected string _seeking;
        #endregion
        #region Constructors
        public Register() { }
        public Register(string first, string last, string email, string password, string password, int phone, string month, int day, int year, string me, string seeking)
        {
            this._first=first;
            this._last=last;
            this._email=email;
            this._password=password;
            this._password=password;
            this._phone=phone;
            this._month=month;
            this._day=day;
            this._year=year;
            this._me=me;
            this._seeking=seeking;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string First
        {
            get {return _first;}
            set {_first=value;}
        }
        public virtual string Last
        {
            get {return _last;}
            set {_last=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual int Phone
        {
            get {return _phone;}
            set {_phone=value;}
        }
        public virtual string Month
        {
            get {return _month;}
            set {_month=value;}
        }
        public virtual int Day
        {
            get {return _day;}
            set {_day=value;}
        }
        public virtual int Year
        {
            get {return _year;}
            set {_year=value;}
        }
        public virtual string Me
        {
            get {return _me;}
            set {_me=value;}
        }
        public virtual string Seeking
        {
            get {return _seeking;}
            set {_seeking=value;}
        }
        #endregion
    }
    #endregion
}