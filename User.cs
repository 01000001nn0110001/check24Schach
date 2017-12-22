using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;	
using System.ComponentModel.DataAnnotations.Schema;

namespace splitIT.Models
{
/// <summary>
/// User of the application
/// </summary>
    public class User
    {
        /// <summary>
        /// Unique ID
        /// </summary>
        /// <returns>Unique ID</returns>
        [Key]
        public Guid Id { get; set; }
        /// <summary>
        /// Name of the User
        /// </summary>
        /// <returns></returns>
        [Required,MinLength(5),MaxLength(50)]
        public string Name { get; set; }
        /// <summary>
        /// Email address of user
        /// </summary>
        /// <returns></returns>
        [Required,EmailAddress]
        public string Email { get; set; }
        // public virtual ICollection<UserInPayment> Payments { get; set; }
    }
}