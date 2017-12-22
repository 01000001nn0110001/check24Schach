using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Newtonsoft.Json.Linq;
using splitIT.Data;
using splitIT.Models;

namespace Chess.Controllers
{
    [Route("api/[controller]")]
    public class UserController : Controller
    {
        public UserController(ChessDBContext _context)
        {
            Context = _context;
        }
        private ChessDBContext Context { get; set; }

        [HttpPost("Create")]
        public async Task<IActionResult> CreateUser([FromBody]JObject value)
        {
            User user = null;
            try
            {

                user = value.ToObject<User>();
            }
            catch (System.Exception)
            {
                Guid id = Guid.Empty;
                if (Guid.TryParse(value["id"].Value<string>(), out id))
                {
                    user = new User()
                    {
                        Id = id,
                        Name = value["name"].Value<string>(),
                        Email = value["email"].Value<string>()
                    };
                }
                else
                {
                    user = new User()
                    {
                        Name = value["name"].Value<string>(),
                        Email = value["email"].Value<string>()
                    };
                }

            }
            if (user == null)
            {
                return BadRequest("user=null");
            }

            //Perform Validation manually, as User is not bound as Model
            this.Validate(user);

            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }
            //Validieren ob user passt
            if (Context.Users.Count(x => x.Email == user.Email) > 0)
            {
                return BadRequest("User with this Email already exists");

            }

            //In DB speichern
            await Context.Users.AddAsync(user);
            await Context.SaveChangesAsync();

            //Get from DB
            var newUser = Context.Users.Where(x => x.Email == user.Email).SingleOrDefault();


            //Return
            return Ok(newUser);

        }
        [HttpGet("Get")]
         public async Task<IActionResult> GetUser(string value){

             //Get from DB
             var existingUser = Context.Users.Where(x => x.Email == value).SingleOrDefault();

            //Return
             return Ok(existingUser);
         }

[HttpGet("GetAll/{value}")]
    public async Task<IActionResult> GetAll(string value){
        var allUsers = Context.Users.Where(x => 
        x.Name.Contains(value)||x.Email.Contains(value)).ToList();

        //Return
        return Ok(allUsers);

    }
    [HttpGet("GetById/{value}")]
         public async Task<IActionResult> GetById(Guid value){

             //Get from DB
             var existingUser = Context.Users.Where(x => x.Id == value).SingleOrDefault();

            //Return
             return Ok(existingUser);
         }

    [HttpGet("GetAll")]
    public IActionResult GetAll(){
        var allUsers = Context.Users.ToList();
        //Return
        return Ok(allUsers);

    }

    }

}